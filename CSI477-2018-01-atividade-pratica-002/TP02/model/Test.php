<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tests
 *
 * @author Usuario
 */

namespace Model;

use Model\Database;

class Test {

    protected $db = null;
    private $id;
    private $user_id;
    private $date;
    private $procedure_id;

    function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    function setAll($id, $user_id, $procedure_id, $date) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->procedure_id = $procedure_id;
        $this->date = $date;
    }

    function setInsert($user_id, $procedure_id, $date) {
        $this->user_id = $user_id;
        $this->procedure_id = $procedure_id;
        $this->date = $date;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setProcedure_id($procedure_id) {
        $this->procedure_id = $procedure_id;
    }

    public function relatorio() {
        $sql = "SELECT users.name, procedures.name AS procedures, procedures.price  FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ";
      
        return $this->db->query($sql);
    }
      public function relatorioAllPrice() {
//          SELECT SUM(procedures.price) FROM `tests`,`users`,`procedures`  WHERE tests.user_id= users.id AND procedures.id= tests.procedure_id;
        $sql = "SELECT SUM(procedures.price) AS totalprice FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ";
      $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $total_registros = $stmt->rowCount();

        if ($total_registros > 0) {
        }
        return $this->db->query($sql);
    }
       public function relatorioAllCount() {
           $sql = "SELECT COUNT(  procedures.id ) AS totalcount FROM  tests, users , procedures WHERE tests.user_id=  users.id AND  tests.procedure_id =  procedures.id ";
       $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $total_registros = $stmt->rowCount();

        if ($total_registros > 0) {
        }
        
        return $this->db->query($sql);
    }

    public function all() {
        
        $sql = "SELECT tests.id, tests.user_id, tests.procedure_id ,procedures.name,tests.date FROM  tests, procedures WHERE tests.user_id= '" . $this->user_id . "' AND  tests.procedure_id =  procedures.id ";
        return $this->db->query($sql);
    }

    public function delete() {
        $sql = "DELETE FROM tests WHERE id='" . $this->user_id . "'";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function insert() {
        $sql = "INSERT INTO tests (user_id,procedure_id, date, created_at, updated_at) VALUES ('" . $this->user_id . "','" . $this->procedure_id . "','" . $this->date . "', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function checkTest() {
        $sql = "SELECT * FROM tests WHERE procedure_id='" . $this->procedure_id . "'  ";
        echo $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $total_registros = $stmt->rowCount();

        if ($total_registros > 0) {
            return false;
        }
        return true;
    }

    public function update() {
        $sql = "UPDATE tests SET user_id ='" . $this->user_id . "' ,procedure_id= '" . $this->procedure_id . "' , date = '" . $this->date . "',  updated_at= CURRENT_TIMESTAMP WHERE id= '" . $this->id . "'";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
