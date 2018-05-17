<?php

namespace Controller;

use Model\Estado;

class EstadosController {

  public function listar() {

    // Acesso ao Modelo
    $estado = new Estado();

    // Manipular dados
    $lista = $estado->all();


    // Invocar a View
    include './view/estados/lista.php';

  }

  public function create() {
    
    // Carregar os dados dos Estados
    // Exibir a view
    include './view/estados/create.php';
  }

  public function store($request) {
  $nome = $request['nome'];
  $sigla = $request['sigla'];
    
   $estado = new Estado();
   $estado->setNome($nome);
   $estado->setSigla($sigla);
    $estado->save();
     
    session_start();
    $_SESSION['mensagem'] = "Estado inserido com sucesso!";
    $this->redir();
  }
  
  public function redir(){
    header("Location: http://localhost/exercicio%20-%208/router.php?op=2");
    exit();
  }
}
