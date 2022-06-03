<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');

Utils::addRoute('personList', 'PersonListCtrl');

Utils::addRoute('userInfo', 'UserInfoCtrl');

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user", "admin"]);
Utils::addRoute('personSave', 'PersonEditCtrl', ["user", "admin"]);
Utils::addRoute('personDelete', 'PersonEditCtrl', ["admin"]);

Utils::addRoute('hello', 'HelloCtrl');
// Utils::addRoute('accessdenied', 'HelloCtrl');

//Utils::addRoute('action_name', 'controller_class_name');