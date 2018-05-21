<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Model\Procedure;
use Model\User;
use Model\Test;

Class ProceduresController {

    public function listar() {

        $procedure = new Procedure();
        $lista = $procedure->all();
        include './view/procedures/read_geral.php';
    }

    public function listarAdm() {

        $procedure = new Procedure();
        $lista = $procedure->all();
        include './view/adm/list_procedures.php';
    }

    public function listarOp() {

        $procedure = new Procedure();
        $lista = $procedure->all();
        include './view/operador/read_procedures.php';
    }

    public function create() {
        $user = new User();
        $lista = $user->all();
        include './view/adm/create_procedures.php';
    }

    public function showUpdate($request) {
        $lista = $request;
        include './view/operador/update_price.php';
    }

    public function showUpdateAdm($request) {
        $lista = $request;
        include './view/adm/update_procedures.php';
    }

    public function showSelectUser() {
        $user = new User();
        $allusers = $user->all();

        include './view/operador/select_user_to_read.php';
    }

    public function delete($request) {
        $id = $request['id'];

        $procedure = new Procedure();
        $procedure->setId($id);

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($procedure->delete()) {

            $_SESSION['updated_op'] = "Procedimento excluido com sucesso";
        } else {

            $_SESSION['NOTupdated_op'] = "Falha! Esse procedimento possui exames agendados";
        }

        header("Location: router.php?op=107");
        die();
    }

    public function update($request) {
        $id = $request['id'];
        $price = $request['price'];


        $procedure = new Procedure();
        $procedure->setId($id);
        $procedure->setPrice($price);

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }


        if ($procedure->update()) {
            $_SESSION['updated_op'] = "Preço atualizado com sucesso";
        } else {
            $_SESSION['NOTupdated_op'] = "Falha ao atualizar preço";
        }
        header("Location: router.php?op=106");
        die();
    }

    public function updateAdm($request) {
        $id = $request['id'];
        $name = $request['name'];
        $price = $request['price'];


        $procedure = new Procedure();
        $procedure->setAll($id, $name, $price);

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }


        if ($procedure->updateAll()) {
            $_SESSION['updated_op'] = "Procedimento atualizado com sucesso";
        } else {
            $_SESSION['NOTupdated_op'] = "Falha ao atualizar procedimento";
        }
        header("Location: router.php?op=107");
        die();
    }

    public function store($request) {
        $name = $request['name'];
        $price = $request['price'];


        $procedure = new Procedure();
        $procedure->setInsert($name, $price);
        


        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }


        if ($procedure->insert()) {
            $_SESSION['updated_op'] = "Procedimento adicionado com sucesso";
        } else {
            $_SESSION['NOTupdated_op'] = "Falha ao adicionado procedimento";
        }
        header("Location: router.php?op=107");
        die();
    }

}
