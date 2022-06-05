<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class KarnetCtrl {

    public $cos;
    public $id;
    public $date;
    public $newDate;

    public function action_karnet() {

        $cos = SessionUtils::load('nazwa', true);

        $search_params['login'] = $cos;
        $where = &$search_params;

        try {
            $id = App::getDB()->get("klient", 
                "id_klienta"
                    , $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    $date = date("Y/m/d");
    $newDate = date('Y-m-d', strtotime($date. ' + 1 months'));

        if (isset($_POST['student'])) {
            try {
            App::getDB()->insert("czlonkostwo", [
                "ID_klienta" => $id,
                "ID_karnetu" => '1',
                "Data_rozpoczecia" => $date,
                "Data_zakonczenia" => $newDate
                    ]);
                    App::getRouter()->redirectTo("userInfo");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas wstawiania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        }
        else if (isset($_POST['normalny'])){
            try {
            App::getDB()->insert("czlonkostwo", [
                "ID_klienta" => $id,
                "ID_karnetu" => '2',
                "Data_rozpoczecia" => $date,
                "Data_zakonczenia" => $newDate
                    ]);
                    App::getRouter()->redirectTo("userInfo");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas wstawiania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        }
        else if (isset($_POST['premium'])){
            try {
            App::getDB()->insert("czlonkostwo", [
                "ID_klienta" => $id,
                "ID_karnetu" => '3',
                "Data_rozpoczecia" =>  $date,
                "Data_zakonczenia" => $newDate
                    ]);
                    App::getRouter()->redirectTo("userInfo");
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas wstawiania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        }

       App::getSmarty()->display('KarnetView.tpl');
    }

}
