<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <script src="./js/jquery-3.3.1.slim.js"></script>
        <script src="./js/funcoes.js"></script>

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top menu">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Home</p</a>
                    <ul class="nav navbar-nav">
                        <li><a href="router.php?op=100">Área Geral</a></li>
                        <li><a   href="area_paciente.php">Área do Paciente</a></li>
                        <li><a  href="area_adm.php">Área Administrativa</a></li>
                        <?php if (isset($_SESSION["login"])) { ?> 
                        <li ><a href="router.php?op=3"><p class="direito">Deslogar</p></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="principal">
