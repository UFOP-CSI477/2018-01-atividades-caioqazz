<?php

namespace Model;

use Model\Database;

class Aluno {

    protected $db = null;
    private $id;
    private $nome;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade_id;
    private $cep;
    private $mail;

    public function __construct() {
        $this->db = Database::getInstance()->getDB();
        $this->id = 0;
    }
    

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade_id($cidade_id) {
        $this->cidade_id = $cidade_id;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }
    
    function setNumero($numero) {
        $this->numero = $numero;
    }

    
    function setMail($mail) {
        $this->mail = $mail;
    }

        public function all() {
        $sql = "SELECT * FROM alunos ORDER BY nome";
        return $this->db->query($sql);
    }

    public function save() {

        if ($this->id == 0) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function insert() {

        $sql = "INSERT INTO alunos (nome,rua, numero, bairro, cidade_id, cep, mail)
            VALUES ('" . $this->nome . "','" . $this->rua. "','" . $this->numero . "','" . $this->bairro . "',' " . $this->cidade_id . "' ,'" . $this->cep . "', '" . $this->mail . "')";

       $this->db->query($sql);

    }

    public function update() {
        die('update');
    }

}
