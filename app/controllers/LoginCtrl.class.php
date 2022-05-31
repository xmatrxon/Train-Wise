<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    public $form;
    public $rola;
    private $password;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login))
            return false;

        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        if (App::getMessages()->isError())
            return false;

        $search_params = [];
        $search_params['login'] = $this->form->login;
        $where = &$search_params;

        try {
            $rola = App::getDB()->get("klient", 
                "rola"
                    , $where);
            $password = App::getDB()->get("klient", 
                "haslo"
                    , $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        if($password == $this->form->pass) {
            if ($rola == 'admin') {
                RoleUtils::addRole('admin');
            } else if ($rola == "user") {
            RoleUtils::addRole('user');
        }
        }else {
             Utils::addErrorMessage('Błędne dane logowania');
        }

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("personList");
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('hello');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rola', $this->rola);
        App::getSmarty()->display('LoginView.tpl');
    }

}
