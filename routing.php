<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');

Utils::addRoute('personList', 'PersonListCtrl', ["admin"]);
Utils::addRoute('personListPart', 'PersonListCtrl', ["admin"]);

Utils::addRoute('errorList', 'PersonListCtrl', ["user", "admin"]);

Utils::addRoute('userInfo', 'UserInfoCtrl', ["user", "admin"]);

Utils::addRoute('karnet', 'KarnetCtrl', ["user", "admin"]);

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user", "admin"]);
Utils::addRoute('personSave', 'PersonEditCtrl', ["user", "admin"]);
Utils::addRoute('personDeactive', 'PersonEditCtrl', ["admin"]);

Utils::addRoute('hello', 'HelloCtrl');
// Utils::addRoute('accessdenied', 'HelloCtrl');

//Utils::addRoute('action_name', 'controller_class_name');