<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

use Model\Database;

class Procedure {

    protected $db = null;
    private $id;
    private $name;
    private $price;
    private $user_id;

    function __construct() {
        $this->db = Database::getInstance()->getDB();
    }

    function setInsert($name, $price) {
        $this->setName($name);
        $this->setPrice($price);

        session_start();
        $this->setUser_id($_SESSION["id"]);
    }

    function setAll($id, $name, $price) {
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);

        session_start();
        $this->setUser_id($_SESSION["id"]);
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function all() {
        $sql = "SELECT * FROM procedures";
        return $this->db->query($sql);
    }

    public function insert() {
        $sql = "INSERT INTO procedures (name, price, user_id, created_at, updated_at) VALUES ('" . $this->name . "','" . $this->price . "','" . $this->user_id . "', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
           return true;
        } else {
              return false;
        }
    }

    public function update() {
        $sql = "UPDATE procedures SET price = '" . $this->price . "' , updated_at = CURRENT_TIMESTAMP WHERE id = '" . $this->id . "' ";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
         return true;
        } else {
           return false;
        }
    }
    public function delete() {
        $sql = "DELETE FROM procedures WHERE id='" . $this->id. "'";
        $stmt = $this->db->prepare($sql);
        
        If ($stmt->execute()) {
         return true;
        } else {
           return false;
        }
    }

    public function updateAll() {
        $sql = "UPDATE procedures SET name = '" . $this->name . "' , price = '" . $this->price . "' , updated_at = CURRENT_TIMESTAMP WHERE id = '" . $this->id . "' ";
        $stmt = $this->db->prepare($sql);

        If ($stmt->execute()) {
         return true;
        } else {
           return false;
        }
    }

}
