<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\PersonEditForm;

class PersonEditCtrl {

    private $form;
    public $cos;
    

    public function __construct() { 
        $this->form = new PersonEditForm();
    }

    public function validateSave() {
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->imie = ParamUtils::getFromRequest('imie', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko', true, 'Błędne wywołanie aplikacji');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->pass = ParamUtils::getFromRequest('pass', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

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

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_personNew() {
        $this->generateView();
    }

    public function action_personEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("klient", "*", ["id_klienta" => $this->form->id]);
                $this->form->id = $record['id_klienta'];
                $this->form->imie = $record['imie'];
                $this->form->nazwisko = $record['nazwisko'];
                $this->form->nrtel = $record['nr_tel'];
                $this->form->login = $record['login'];
                $this->form->pass = $record['haslo'];
            }catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_personDelete() {
        if ($this->validateEdit()) {
            $search_params = [];
            $search_params['id_klienta'] = $this->form->id;
            $where = &$search_params;

            try {
                App::getDB()->update("klient", ["aktywny" => 0],$where);
                Utils::addInfoMessage('Pomyślnie deaktywowano użytkownika');
            }catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas deaktywacji użytkownika');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personSave() {
        if ($this->validateSave()) {
            try {
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
            $cos = SessionUtils::load('rola', true);

            if($cos == "admin"){
                App::getRouter()->forwardTo('personList');
            }
            else {
                App::getRouter()->forwardTo('userInfo');
            }

            
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        $cos = SessionUtils::load('rola', true);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rola', $cos);
        App::getSmarty()->display('PersonEdit.tpl');
    }

}
