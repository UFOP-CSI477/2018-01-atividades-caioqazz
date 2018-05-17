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

switch ($op) {
	case '1':
		 $alunoController = new AlunosController;
 		 $alunoController->listar();
		break;
	case '2':
		$estadoController = new EstadosController;
		$estadoController->listar();
		break;
	case '3':
		$cidadeController = new CidadesController;
		$cidadeController->listar();
		break;
	case '4':
		$alunoController = new AlunosController;
  		$alunoController->create();
		break;
	case '5':
		$alunoController = new AlunosController;
  		$alunoController->store($_POST);
		break;
	case '6':
		$estadoController = new EstadosController;
  		$estadoController->create();
		break;
	case '7':
		$estadoController = new EstadosController;
  		$estadoController->store($_POST);
		break;
	case '8':
		$cidadeController = new CidadesController;
  		$cidadeController->create();
		break;
	case '9':
		 $cidadeController = new CidadesController;
  		$cidadeController->store($_POST);
		break;
	
	default:
		# code...
		break;
}
// if ( $op == 1 ) {
//   $alunoController = new AlunosController;
//   $alunoController->listar();
// }
// if($op == 2){
// 	$estadoController = new EstadosController;
// 	$estadoController->listar();
// }
// if($op == 3){
// 	$cidadeController = new CidadesController;
// 	$cidadeController->listar();
// }
// if($op == 4){
// 	$cidadeController = new CidadesController;
//   	$cidadeController->create();
// }
// if($op == 5){
// 	 $cidadeController = new CidadesController;
//   	$cidadeController->store($_POST);
// }
