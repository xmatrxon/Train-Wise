<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\PersonEditForm;

class PersonEditCtrl
{

    private $form;
    public $rola;

    public function __construct()
    {
        $this->form = new PersonEditForm();
    }

    public function getParams()
    {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validateSave()
    {
        if (!(isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nrtel) && isset($this->form->login) && isset($this->form->pass)))
        {
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

        if (App::getMessages()->isError()) return false;

        return !App::getMessages()->isError();
    }

    public function validateEdit()
    {
        $v = new Validator();
        $rola = SessionUtils::load('rola', true);
        $this->form->id = $v->validateFromCleanURL(1, ['int' => true, 'required' => true, 'validator_message' => 'Parametr powinien być liczbą całkowitą']);
        if (App::getMessages()->isError())
        {
            if ($rola == 'admin') App::getRouter()->redirectTo('personList');
            else App::getRouter()
                ->redirectTo('userInfo');
        }
        return !App::getMessages()->isError();
    }

    public function validateID()
    {
        $public_id = SessionUtils::load('id', true);
        $rola = SessionUtils::load('rola', true);
        $id = (int)$this->form->id;
        if ($public_id != $id && $rola == 'user')
        {
            App::getRouter()->forwardTo('userInfo');
        }
        return !App::getMessages()->isError();
    }

    public function action_personEdit()
    {
        $this->getParams();
        if ($this->validateEdit())
        {
            if ($this->validateID())
            {
                try
                {
                    $record = App::getDB()->get("klient", "*", ["id_klienta" => $this->form->id]);
                    $this->form->id = $record['id_klienta'];
                    $this->form->imie = $record['imie'];
                    $this->form->nazwisko = $record['nazwisko'];
                    $this->form->nrtel = $record['nr_tel'];
                    $this->form->login = $record['login'];
                    $this->form->pass = $record['haslo'];
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            $this->generateView();
        }
    }

    public function action_personDeactive()
    {
        $this->getParams();
        if ($this->validateEdit())
        {
            $search_params['id_klienta'] = $this->form->id;
            $where = & $search_params;

            try
            {
                App::getDB()->update("klient", ["aktywny" => 0], $where);
                Utils::addInfoMessage('Pomyślnie deaktywowano użytkownika');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Wystąpił błąd podczas deaktywacji użytkownika');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personActivate()
    {
        $this->getParams();
        if ($this->validateEdit())
        {
            $search_params['id_klienta'] = $this->form->id;
            $where = & $search_params;

            try
            {
                App::getDB()->update("klient", ["aktywny" => 1], $where);
                Utils::addInfoMessage('Pomyślnie aktywowano użytkownika');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Wystąpił błąd podczas aktywacji użytkownika');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personSave()
    {
        $this->getParams();
        if ($this->validateSave())
        {
            try
            {
                App::getDB()->update("klient", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                    "nr_tel" => $this->form->nrtel,
                    "login" => $this->form->login,
                    "haslo" => $this->form->pass
                    ], ["id_klienta" => $this->form->id
                    ]);

                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
            $rola = SessionUtils::load('rola', true);

            if ($rola == "admin")
            {
                App::getRouter()->forwardTo('personList');
            }
            else
            {
                App::getRouter()->forwardTo('userInfo');
            }
        }
        else
        {
            $this->generateView();
        }
    }

    public function generateView()
    {
        $rola = SessionUtils::load('rola', true);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rola', $rola);
        App::getSmarty()->display('PersonEdit.tpl');
    }

}

