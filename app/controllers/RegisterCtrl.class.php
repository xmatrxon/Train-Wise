<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\RegisterForm;

class RegisterCtrl {

    private $form;
    public $id;

    public function __construct() {
        $this->form = new RegisterForm();
    }

    public function validate() {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel');
        $this->form->pesel = ParamUtils::getFromRequest('pesel');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');


        if (App::getMessages()->isError())
            return false;

        if (empty($this->form->imie)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->form->nazwisko)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->nrtel)) {
            Utils::addErrorMessage('Nie podano numeru telefonu');
        }
        if (empty($this->form->pesel)) {
            Utils::addErrorMessage('Nie podano peselu');
        }
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

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
                "imie" => $this->form->imie,
                "nazwisko" => $this->form->nazwisko,
                "nr_tel" => $this->form->nrtel,
                "pesel" => $this->form->pesel,
                    ]);

        $search_params = [];
        $search_params['pesel'] = $this->form->pesel;
        $where = &$search_params;

           $id = App::getDB()->get("klient",
                "id_klienta",
                   $where);

            App::getDB()->insert("klient_internet", [
                "ID_klienta" => $id,
                "login" => $this->form->login,
                "haslo" => $this->form->pass,
                    ]);       

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getRouter()->forwardTo('login');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
    }

}
