<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class KarnetCtrl
{

    private $login;
    private $id;
    private $date;
    private $newDate;
    private $karnet;

    public function action_karnet()
    {
        $login = SessionUtils::load('nazwa', true);
        $karnetActive = SessionUtils::load('karnetActive', true);

        $search_params['login'] = $login;
        $where = & $search_params;

        try
        {
            $id = App::getDB()->get("klient", "id_klienta", $where);
            $karnet = App::getDB()->get("czlonkostwo", "ID_klienta", ["ID_klienta" => $id]);
        }
        catch(\PDOException $e)
        {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        $date = date("Y/m/d");
        $newDate = date('Y-m-d', strtotime($date . ' + 1 months'));

        if ($karnet == '')
        {
            if (isset($_POST['student']))
            {
                try
                {
                    App::getDB()->insert("czlonkostwo", ["ID_klienta" => $id, "ID_karnetu" => '1', "Data_rozpoczecia" => $date, "Data_zakonczenia" => $newDate]);
                    App::getRouter()->redirectTo("userInfo");
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Wystąpił błąd podczas wstawiania rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            else if (isset($_POST['normalny']))
            {
                try
                {
                    App::getDB()->insert("czlonkostwo", ["ID_klienta" => $id, "ID_karnetu" => '2', "Data_rozpoczecia" => $date, "Data_zakonczenia" => $newDate]);
                    App::getRouter()->redirectTo("userInfo");
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Wystąpił błąd podczas wstawiania rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            else if (isset($_POST['premium']))
            {
                try
                {
                    App::getDB()->insert("czlonkostwo", ["ID_klienta" => $id, "ID_karnetu" => '3', "Data_rozpoczecia" => $date, "Data_zakonczenia" => $newDate]);
                    App::getRouter()->redirectTo("userInfo");
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Wystąpił błąd podczas wstawiania rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
        }
        else
        {
            Utils::addErrorMessage('Posiadasz już karnet');
            App::getRouter()->forwardTo("userInfo");
        }
        App::getSmarty()->display('KarnetView.tpl');
    }
}