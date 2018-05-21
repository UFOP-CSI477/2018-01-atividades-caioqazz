<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Description of Login
 *
 * @author Usuario
 */
namespace Model;

use Model\Database;

class Login {
    
    
    protected $db = null;
     private $user;
     private $password;
     
    function __construct() {
        $this->db = Database::getInstance()->getDB();
    }
    
    function setAll($user, $password){
         $this->user = $user;
          $this->password = $password;
    }
    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
    function autentication(){
         $sql = "SELECT * FROM users WHERE email='" . $this->user . "' AND password= '" . $this->password . "' ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $total_registros = $stmt->rowCount();
        
        if($total_registros>0){
            return true;
        }
        return false;
    }
    function getType(){
        $sql = "SELECT type FROM users WHERE email='" . $this->user . "' AND password= '" . $this->password . "' ";
        $select = $this->db->query($sql);
        $result = $select->fetch();
       
        return $result["type"];
    }
     function getId(){
        $sql = "SELECT id FROM users WHERE email='" . $this->user . "' AND password= '" . $this->password . "' ";
        $select = $this->db->query($sql);
        $result = $select->fetch();
        
        return $result["id"];
    }
}
