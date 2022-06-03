<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\PersonEditForm;

class PersonEditCtrl {

    private $form; //dane formularza
    public $cos;
    

    public function __construct() {
        //stworzenie potrzebnych obiektów
        
        $this->form = new PersonEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->imie = ParamUtils::getFromRequest('imie', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko', true, 'Błędne wywołanie aplikacji');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->pass = ParamUtils::getFromRequest('pass', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->imie))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->nazwisko))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->nrtel))) {
            Utils::addErrorMessage('Wprowadź numer telefonu');
        }
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->pass))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_personNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_personEdit() {
        // 1. walidacja id osoby do edycji

        

                    if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("klient", "*", [
                    "id_klienta" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['id_klienta'];
                $this->form->imie = $record['imie'];
                $this->form->nazwisko = $record['nazwisko'];
                $this->form->nrtel = $record['nr_tel'];
                $this->form->login = $record['login'];
                $this->form->pass = $record['haslo'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_personDelete() {
        if ($this->validateEdit()) {

        $search_params = [];
        $search_params['id_klienta'] = $this->form->id;
        $where = &$search_params;

            try {
                App::getDB()->update("klient", [
                    "aktywny" => 0
                ],$where);
                Utils::addInfoMessage('Pomyślnie deaktywowano użytkownika');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personSave() {
        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {

            // 2. Zapis danych w bazie
            try {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("klient", [
                        "imie" => $this->form->imie,
                        "nazwisko" => $this->form->nazwisko,
                        "nr_tel" => $this->form->nrtel,
                        "login" => $this->form->login,
                        "haslo" => $this->form->pass
                            ], [
                        "id_klienta" => $this->form->id
                    ]);
                
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            $cos = SessionUtils::load('rola', true);

            if($cos == "admin"){
                App::getRouter()->forwardTo('personList');
            }
            else {
                App::getRouter()->forwardTo('userInfo');
            }

            
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        $cos = SessionUtils::load('rola', true);
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->assign('rola', $cos);
        App::getSmarty()->display('PersonEdit.tpl');
    }

}
