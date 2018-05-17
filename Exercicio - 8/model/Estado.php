<?php

namespace Model;

use Model\Database;

class Estado {

  protected $db = null;
  private $nome;
  private $sigla;
  
  
  public function __construct() {
    $this->db = Database::getInstance()->getDB();
   
  }
  
  public function __construct1($nome, $sigla) {
    $this->db = Database::getInstance()->getDB();
    $this->nome = $nome;
    $this->sigla = $sigla;
  }
  
  function setNome($nome) {
      $this->nome = $nome;
  }

  function setSigla($sigla) {
      $this->sigla = $sigla;
  }

    public function save() {
            $this->insert();
    }
    
  public function all() {
    $sql = "SELECT * FROM estados ORDER BY nome";
    return $this->db->query($sql);
  }
  
    public function insert() {

        $sql = "INSERT INTO estados (nome, sigla)
            VALUES ('" . $this->nome . "', '" . $this->sigla . "')";
      $this->db->query($sql);
       
    }






}
