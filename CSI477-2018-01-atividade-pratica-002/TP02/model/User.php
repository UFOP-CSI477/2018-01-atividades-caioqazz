<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author Usuario
 */

namespace Model;

use Model\Database;

class User {

    protected $db = null;
    private $id;
    private $name;
    private $email;
    private $password;
    private $remember_token;
    private $type;

    function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    function __construct2($name, $email, $password, $remember_token, $type) {
        $this->db = Database::getInstance()->getDB();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->remember_token = $remember_token;
        $this->type = $type;
    }

    function setAll($id, $name, $email, $password, $remember_token, $type) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->remember_token = $remember_token;
        $this->type = $type;
    }

    function setInsert($name, $email, $password, $remember_token, $type) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->remember_token = $remember_token;
        $this->type = $type;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRemember_token($remember_token) {
        $this->remember_token = $remember_token;
    }

    function setType($type) {
        $this->type = $type;
    }

    public function all() {
        $sql = "SELECT * FROM users WHERE id=3";
        return $this->db->query($sql);
    }

    public function allWithTests() {
        $sql = "SELECT * FROM users";
        return $this->db->query($sql);
    }

    public function getIdName() {
        $sql = "SELECT id, name FROM users WHERE type=1";
        return $this->db->query($sql);
    }

    public function insert() {
        $sql = "INSERT INTO users (name,email, password, type, remember_token, created_at, updated_at) VALUES ('" . $this->name . "','" . $this->email . "','" . $this->password . "', '" . $this->type . "' ,'" . $this->remember_token . "', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update() {
        $sql = "UPDATE users SET name = '" . $this->name . "' , email = '" . $this->email . "', password =  '" . $this->name . "', type= '" . $this->name . "' , remember_token = '" . $this->name . "', updated_at= CURRENT_TIMESTAMP WHERE id = '" . $this->id . "'";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
