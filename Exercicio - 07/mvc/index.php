<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <style type="text/css">
    h1{

          font-size: 28pt;
          text-align: center;
          color: black;
    }
    .test{
      font-size: 28pt;
      text-align: center;
      width: 95%;
      float: center;
                   
     }
     body{
      background: Snow ;
     }
    </style>
  </head>
  <body>
    <br><h1>Sistema de Controle Acadêmico</h1><br><br><br><br><br><br>
    <!-- Links //-->

    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <a href="router.php?op=1"><input type="button" class="btn btn-success test" value="Listar alunos"></a><br>
          <a href="router.php?op=2"><input type="button" class="btn btn-warning test" value="Listar estados"></a><br>
          <a href="router.php?op=3"><input type="button" class="btn btn-info test" value="Listar cidades"></a><br>
  

        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

    </body>
</html>
