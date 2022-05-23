<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\RegisterForm;

class RegisterCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function validate() {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel');
        $this->form->pesel = ParamUtils::getFromRequest('pesel');
        $this->form->pass = ParamUtils::getFromRequest('pass');


        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->imie)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->nazwisko)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->nrtel)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pesel)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {       
try {

            App::getDB()->insert("klient", [
                "id_klienta" => $this->form->id,
                "imie" => $this->form->imie,
                "nazwisko" => $this->form->nazwisko,
                "nr_tel" => $this->form->nrtel,
                "pesel" => $this->form->pesel,
                    ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getRouter()->forwardTo('personList');
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('RegisterView.tpl');
    }

}
