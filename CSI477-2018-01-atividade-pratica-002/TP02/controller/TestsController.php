<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Model\Test;
use Model\User;
use Model\Procedure;

Class TestsController {

    public function listar() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $test = new Test();
        $test->setUser_id($_SESSION['id']);
        $lista = $test->all();

        include './view/pacientes/read.php';
    }
    public function listarRelatorio(){
       $test = new Test();
       $lista= $test->relatorio();
       $count = $test->relatorioAllCount();
       $prices = $test->relatorioAllPrice();
       include './view/adm/relatorio.php';
       
    }
     public function listarOp($request) {
         
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        echo $request['user_id'];
        $test = new Test();
        $test->setUser_id($request['user_id']);
        $lista = $test->all();

        include './view/operador/read_tests.php';
    }

    public function create() {
        $user = new User();
        $procedures = new Procedure();
        $allusers = $user->all();
        $allprocedures = $procedures->all();
        include './view/tests/create.php';
    }

    public function showAddTests() {
        $procedures = new Procedure();
        $allprocedures = $procedures->all();
        include './view/pacientes/add_tests.php';
    }

    public function showUpdate($request) {
        $lista = $request;
        $user = new User();
        $procedures = new Procedure();
        $allusers = $user->all();
        $allprocedures = $procedures->all();

        include './view/pacientes/update.php';
    }

    public function delete($request) {
        $id = $request['id'];
        $test = new Test();
        $test->setUser_id($id);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($test->delete()) {
            $_SESSION['deleted'] = "Exame desmarcado com sucesso!";
        } else {
            $_SESSION['NOTdeleted'] = "Falha ao desmarcar exame!";
        }
        
     $this->listar();
    }

    public function update($request) {

        $id = $request['id'];
        $user_id = $request['user_id'];
        $procedure_id = $request['procedure_id'];
        $date = $request['date'];

        $test = new Test();
        $test->setAll($id, $user_id, $procedure_id, $date);
      
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($test->update()) {
            $_SESSION['updated'] = "Exame remarcado com sucesso!";
        } else {
            $_SESSION['NOTupdated'] = "Falha ao remarcar exame!";
        }
      $this->listar();
    }

    public function store($request) {

        $user_id = $request['user_id'];
        $procedure_id = $request['procedure_id'];
        $date = $request['date'];

        $test = new Test();
        $test->setInsert($user_id, $procedure_id, $date);
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if ($test->insert()) {
            $_SESSION['inserted'] = "Exame agendado com sucesso!";
        } else {
            $_SESSION['NOTinserted'] = "Falha ao agendar exame!";
        }
      $this->listar();
       
    }

    

}
