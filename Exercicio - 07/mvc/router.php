<?php

// Includes - framework
include './model/Database.php';
include './model/Aluno.php';
include './model/Estado.php';
include './model/Cidade.php';
include './controller/AlunosController.php';
include './controller/EstadosController.php';
include './controller/CidadesController.php';

// Tratamento das rotas
use Controller\AlunosController;
use Controller\EstadosController;
use Controller\CidadesController;

$op = $_GET['op'];

// Definição das rotas
if ( $op == 1 ) {
  $alunoController = new AlunosController;
  $alunoController->listar();
}
if($op == 2){
	$estadoController = new EstadosController;
	$estadoController->listar();
}
if($op == 3){
	$cidadeController = new CidadesController;
	$cidadeController->listar();
}
