<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;
use PDO;
/**
 * Description of Database
 *
 * @author Usuario
 */
class Database {
    protected $db = null;
    
    protected function __construct() {
  }

  // Singleton - instance - static
  public static function getInstance() {

    static $instance = null;

    if ($instance === null) {
      $instance = new static();
    }

    return $instance;

  }

  public function getDB() {

    if ($this->db === null) {
    
  

      $db = new PDO('mysql:host=localhost;dbname=analyses', 'sysanalyses', '123456');
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $db;

  }

}
