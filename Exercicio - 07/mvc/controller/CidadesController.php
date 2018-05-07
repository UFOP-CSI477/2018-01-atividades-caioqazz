<?php

namespace Controller;

use Model\Cidade;

class CidadesController {

  public function listar() {

    // Acesso ao Modelo
    $cidade = new Cidade();

    // Manipular dados
    $lista = $cidade->all();


    // Invocar a View
    include './view/cidades/lista.php';



  }

}
