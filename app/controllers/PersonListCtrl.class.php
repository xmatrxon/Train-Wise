<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonSearchForm;
use app\forms\PageForm;

class PersonListCtrl
{

    private $form;
    private $records;
    public $page = 0;
    public $numberOfRecords;

    public function __construct()
    {
        $this->form = new PersonSearchForm();
        $this->form2 = new PageForm();
    }

    public function getParams()
    {
        $this->form->nazwisko = ParamUtils::getFromRequest('sf_nazwisko');
        $this->form2->page = ParamUtils::getFromRequest('page');
    }

    public function validate()
    {
        $v = new Validator();
        $this->form2->page = $v->validate($this->form2->page, ['int' => true, 'validator_message' => 'Parametr powinien być liczbą całkowitą']);
        if (App::getMessages()->isError()) App::getRouter()->redirectTo('personList');
        return !App::getMessages()->isError();
        if (App::getMessages()->isError()) return false;
    }

    public function load_data()
    {
        $this->getParams();
        if ($this->validate())
        {

            $limit = 5;
            $offset = $limit * ($this->form2->page);

            $search_params['nazwisko'] = $this->form->nazwisko;
            $where = & $search_params;
            $where["ORDER"] = "nazwisko";

            if ($this->form->nazwisko != "")
            {
                try
                {
                    $this->liczba = App::getDB()->count("klient", $where);
                    $this->numberOfRecords = $this->liczba;
                    if ($this->liczba % $limit)
                    {
                        $this->liczba = intval(($this->liczba / $limit) + 1);
                    }
                    else
                    {
                        $this->liczba = intval($this->liczba / $limit);
                    }

                    $this->lastPage = $this->liczba;

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
                            ], ["nazwisko" => $this->form->nazwisko, "LIMIT" => [$offset, $limit]]);

                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            else
            {
                try
                {
                    $this->liczba = App::getDB()->count("klient");
                    $this->numberOfRecords = $this->liczba;

                    if ($this->liczba % $limit)
                    {
                        $this->liczba = intval(($this->liczba / $limit) + 1);
                    }
                    else
                    {
                        $this->liczba = intval($this->liczba / $limit);
                    }

                    $this->lastPage = $this->liczba;

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
                    ], ["LIMIT" => [$offset, $limit]]);

                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
        }
    }

    public function action_personList()
    {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('klient', $this->records);
        App::getSmarty()->assign('page', $this->form2->page);
        App::getSmarty()->assign('lastPage', $this->lastPage);
        App::getSmarty()->assign('numberOfRecords', $this->numberOfRecords);
        App::getSmarty()->display('PersonList.tpl');
    }

    public function action_personListPart()
    {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('klient', $this->records);
        App::getSmarty()->assign('page', $this->form2->page);
        App::getSmarty()->assign('lastPage', $this->lastPage);
        App::getSmarty()->assign('numberOfRecords', $this->numberOfRecords);
        App::getSmarty()->display('PersonListTable.tpl');
    }

}

