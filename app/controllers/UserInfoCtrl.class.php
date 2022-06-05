<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\PersonSearchForm;

class UserInfoCtrl {

    public $keep;
    public $cos;


    public function action_userInfo() {
    $cos = SessionUtils::load('nazwa', true);

        $search_params['login'] = $cos;
        $where = &$search_params;

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
    
       App::getSmarty()->assign('klient', $this->records);
       App::getSmarty()->display('UserInfoView.tpl');
    }

}
