<?php

namespace Controller;

use Model\Aluno;
use Model\Cidade;

class AlunosController {

  public function listar() {

    // Acesso ao Modelo
    $aluno = new Aluno();

    // Manipular dados
    $lista = $aluno->all();


    // Invocar a View
    include './view/alunos/lista.php';

  }

    public function create() {

    $cidade = new Cidade();
    
    $lista = $cidade->all();
    include './view/alunos/create.php';
  }

public function store($request) {
    $nome = $request['nome'];
    $cidade_id = $request['cidade_id'];
    $rua= $request['rua'];
    $numero= $request['numero'];
    $bairro = $request['bairro'];
    $cep =  $request['cep'];
    $mail=  $request['mail'];
    
    $aluno = new Aluno();
    
    $aluno->setNome($nome);
    $aluno->setCidade_id($cidade_id);
    $aluno->setBairro($bairro);
    $aluno->setRua($rua);
    $aluno->setCep($cep);
    $aluno->setMail($mail);
    $aluno->setNumero($numero);
    $aluno->save();

    session_start();
    $_SESSION['mensagem'] = "Aluno inserido com sucesso!";
    
    $this->redir();


  }
  public function redir(){
    header("Location: http://localhost/exercicio%20-%208/router.php?op=1");
    exit();
  }

}
