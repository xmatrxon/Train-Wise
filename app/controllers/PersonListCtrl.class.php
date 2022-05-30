<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PersonSearchForm;

class PersonListCtrl {

    private $form;
    private $records;

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
            $this->records = App::getDB()->select("klient", [
                "id_klienta",
                "imie",
                "nazwisko",
                "nr_tel",
                "pesel",
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
