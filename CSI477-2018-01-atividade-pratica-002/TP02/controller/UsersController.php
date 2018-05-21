<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Model\User;

Class UsersController {

    public function listar() {
        $user = new User();
        $lista = $user->all();
        include './view/adm/list_clients.php';
    }

    public function create() {

        include './view/users/create.php';
    }

    public function createAdm() {

        include './view/adm/sign_adm.php';
    }

    public function createOp() {

        include './view/adm/sign_op.php';
    }

    public function delete($request) {
        
    }

    public function showUpdate($request) {


        include './view/users/update.php';
    }

    public function update($request) {
        $id = $request['id'];
        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $remember_token = $request['remember_token'];
        $type = $request['type'];

        $user = new User();
        $user->setAll($id, $name, $email, $password, $remember_token, $type);
        $user->update();
    }

    public function store($request) {

        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $remember_token = $request['remember_token'];

        $user = new User();
        $user->setInsert($name, $email, $password, $remember_token, 3);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($user->insert()) {

            $_SESSION['add'] = "Usuario adicionado com sucesso";
        } else {

            $_SESSION['NOTadd'] = "Falha ao adicionar usuario";
        }

        header("Location: area_paciente.php");
        die();
    }

    public function storeAdm($request) {

        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $remember_token = $request['remember_token'];

        $user = new User();
        $user->setInsert($name, $email, $password, $remember_token, 1);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($user->insert()) {

            $_SESSION['updated_op'] = "Usuario adicionado com sucesso";
        } else {

            $_SESSION['NOTupdated_op'] = "Falha ao adicionar usuario";
        }

        header("Location: router.php?op=305");
        die();
    }

    public function storeOp($request) {

        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $remember_token = $request['remember_token'];

        $user = new User();
        $user->setInsert($name, $email, $password, $remember_token, 2);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($user->insert()) {

            $_SESSION['updated_op'] = "Usuario adicionado com sucesso";
        } else {

            $_SESSION['NOTupdated_op'] = "Falha ao adicionar usuario";
        }

        header("Location: router.php?op=307");
        die();
    }

}
