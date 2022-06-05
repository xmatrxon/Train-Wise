<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\LoginForm;

class LoginCtrl {

    public $form;
    public $rola;
    private $password;
    public $aktywny;
    public $id;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function getParams() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validate() {
		if (! (isset($this->form->login) && isset($this->form->pass))) {
			return false;
		}

        $v = new Validator();

        $v->validate($this->form->login, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 50,
            'validator_message' => 'Login powinien mieć pomiędzy 3 a 50 znaków'
        ]);

        $v->validate($this->form->pass, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 3,
            'max_length' => 50,
            'validator_message' => 'Hasło powinno mieć pomiędzy 3 a 50 znaków'
        ]);

        if (App::getMessages()->isError())
            return false;

        $search_params['login'] = $this->form->login;
        $where = &$search_params;

        SessionUtils::store('nazwa', $this->form->login);
        
        try {
            $aktywny = App::getDB()->get("klient", 
                "aktywny"
                    , $where);
            $rola = App::getDB()->get("klient", 
                "rola"
                    , $where);
            $password = App::getDB()->get("klient", 
                "haslo"
                    , $where);
            $id = App::getDB()->get("klient", 
                "id_klienta"
                    , $where);
            SessionUtils::store('id', $id);        
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        if ($aktywny == 1){
                SessionUtils::store('rola', $rola);

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
            }else if ($aktywny == ''){
                Utils::addErrorMessage('Użytkownik nie istnieje');
            }
            else if ($aktywny == 0) {
                Utils::addErrorMessage('Użytkownik nieaktywny');
            }   
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        $this->getParams();
        if ($this->validate()) {
             if (RoleUtils::inRole("admin")) {
                App::getRouter()->redirectTo("personList");
            } else {
                App::getRouter()->redirectTo("userInfo");
        }
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        SessionUtils::remove('nazwa');
        SessionUtils::remove('rola');
        SessionUtils::remove('id');
        App::getRouter()->redirectTo('hello');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rola', $this->rola);
        App::getSmarty()->display('LoginView.tpl');
    }

}
