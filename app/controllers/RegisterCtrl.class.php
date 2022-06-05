<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use app\forms\RegisterForm;

class RegisterCtrl {

    private $form;
    public $id;

    public function __construct() {
        $this->form = new RegisterForm();
    }

    public function getParams() {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel');
        $this->form->pesel = ParamUtils::getFromRequest('pesel');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validate() {

		if (! (isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nrtel) && isset($this->form->pesel) && isset($this->form->login) && isset($this->form->pass))) {
			return false;
		}

        $v = new Validator();

        $v->validate($this->form->imie, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'min_length' => 3,
            'max_length' => 50,
            'validator_message' => 'Imię powinno mieć pomiędzy 3 a 50 znaków'
        ]);

        $v->validate($this->form->nazwisko, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane',
            'min_length' => 3,
            'max_length' => 50,
            'validator_message' => 'Nazwisko powinno mieć pomiędzy 3 a 50 znaków'
        ]);

        $v->validate($this->form->nrtel, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Numer telefonu jest wymagany',
            'min_length' => 9,
            'max_length' => 9,
            'int' => true,
            'validator_message' => 'Numer telefonu powinien mieć 9 cyfr'
        ]);

        $v->validate($this->form->pesel, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pesel jest wymagany',
            'min_length' => 11,
            'max_length' => 11,
            'int' => true,
            'validator_message' => 'Pesel powinien mieć 11 cyfr'
        ]);

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

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        $this->getParams();
        if ($this->validate()) {       
            try {
            App::getDB()->insert("klient", [
                "imie" => $this->form->imie,
                "nazwisko" => $this->form->nazwisko,
                "nr_tel" => $this->form->nrtel,
                "pesel" => $this->form->pesel,
                "login" => $this->form->login,
                "haslo" => $this->form->pass,
                    ]);
    
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas rejestracji użytkownika');
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
