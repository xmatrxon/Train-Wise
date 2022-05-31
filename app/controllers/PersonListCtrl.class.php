<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PersonSearchForm;

class PersonListCtrl {

    private $form;
    private $records;
    public $karnet;

    public function __construct() {
        $this->form = new PersonSearchForm();
    }

    public function validate() {
        $this->form->nazwisko = ParamUtils::getFromRequest('sf_nazwisko');
        return !App::getMessages()->isError();
    }

    public function action_personList() {
        $this->validate();

        $search_params = [];
        if (isset($this->form->nazwisko) && strlen($this->form->nazwisko) > 0) {
            $search_params['nazwisko[~]'] = $this->form->nazwisko . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "nazwisko";

        try {
            $this->records = App::getDB()->select("czlonkostwo", [
                "[<]klient"=>["id_klienta" => "ID_klienta"],
                "[>]karnet"=>["ID_karnetu" => "ID_karnetu"]],[
                "klient.id_klienta",
                "klient.imie",
                "klient.nazwisko",
                "klient.nr_tel",
                "klient.pesel",
                "klient.aktywny",
                "czlonkostwo.Data_rozpoczecia",
                "czlonkostwo.Data_zakonczenia",
                "karnet.Nazwa_karnetu"
                    ], $where);
        
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('klient', $this->records);
        App::getSmarty()->display('PersonList.tpl');
    }

}
