<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './model/Database.php';
include './model/Procedure.php';
include './model/Test.php';
include './model/User.php';
include './model/Login.php';
include './controller/ProceduresController.php';
include './controller/TestsController.php';
include './controller/UsersController.php';
include './controller/LoginController.php';

use Controller\ProceduresController;
use Controller\TestsController;
use Controller\UsersController;
use Controller\LoginController;

$op = $_GET['op'];

switch ($op) {

    case '1':
        $login = new LoginController();
        $login->show();
        break;
    case '2':
        $login = new LoginController();
        $login->autentication($_POST);
        break;
    case '3':
        $login = new LoginController();
        $login->loggout();
        break;
    case '4':
        include './view/login/sign.php';
        break;
    case '5':
        include './view/login/login.php';
        break;
    
    case '100':
        $proceduresController = new ProceduresController();
        $proceduresController->listar();
        break;
    case '101':
        $proceduresController = new ProceduresController();
        $proceduresController->create();
        break;
    case '102':
        $proceduresController = new ProceduresController();
        $proceduresController->store($_POST);
        break;
    case '103':
        $proceduresController = new ProceduresController();
        $proceduresController->showUpdate($_POST);
        break;
    case '104':
        $proceduresController = new ProceduresController();
        $proceduresController->update($_POST);
        break;
    case '105':
        $proceduresController = new ProceduresController();
        $proceduresController->showSelectUser();
        break;
     case '106':
        $proceduresController = new ProceduresController();
        $proceduresController->listarOp();
        break;
   case '107':
        $proceduresController = new ProceduresController();
        $proceduresController->listarAdm();
        break;
    case '108':
        $proceduresController = new ProceduresController();
        $proceduresController->showUpdateAdm($_POST);
        break;
    case '109':
        $proceduresController = new ProceduresController();
        $proceduresController->updateAdm($_POST);
        break;
     case '110':
        $proceduresController = new ProceduresController();
        $proceduresController->delete($_POST);
        break;
    case '200':
        $testsController = new TestsController();
        $testsController->listar();
        break;
    case '201':
        $testsController = new TestsController();
        $testsController->showAddTests();
        break;
    case '202':
        $testsController = new TestsController();
        $testsController->store($_POST);
        break;
    case '203':
        $testsController = new TestsController();
        $testsController->showUpdate($_POST);
        break;
    case '204':
        $testsController = new TestsController();
        $testsController->update($_POST);
        break;
    case '205':
        $testsController = new TestsController();
        $testsController->delete($_POST);
        break;
     case '206':
        $testsController = new TestsController();
        $testsController->listarOp($_POST);
        break;
     case '207':
        $testsController = new TestsController();
        $testsController->listarRelatorio();
        break;
    case '300':
        $usersController = new UsersController();
        $usersController->listar();
        break;
    case '301':
        $usersController = new UsersController();
        $usersController->create();
        break;
    case '302':
        $usersController = new UsersController();
        $usersController->store($_POST);
        break;
    case '303':
        $usersController = new UsersController();
        $usersController->showUpdate($_POST);
        break;
    case '304':
        $usersController = new UsersController();
        $usersController->update($_POST);
        break;
    case '305':
        $usersController = new UsersController();
        $usersController->createAdm();
        break;
    case '306':
        $usersController = new UsersController();
        $usersController->storeAdm($_POST);
        break;
    case '307':
        $usersController = new UsersController();
        $usersController->createOp();
        break;
    case '308':
        $usersController = new UsersController();
        $usersController->storeOp($_POST);
        break;
    case '1001':
        include './area_adm.php';
        break;
    case '1002':
        include './area_adm.php';
        break;
    case '1003':
        include './area_paciente.php';
        break;
    case '2001':
        include './view/tests/read.php';
        break;


    default:
        break;
}

