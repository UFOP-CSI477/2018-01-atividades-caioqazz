<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inserir cidades</title>
        <link rel="stylesheet" href="../Exercicio8/bootstrap/css/bootstrap.css">
        <style type="text/css">
            /* Comentário CSS */
            body{
                background-color: MintCream ;
            }
            table, th, td {
                border: 1px dotted black;
                border-right: medium solid black;
                border-left: medium solid black;
                font-family: arial , tahoma;
                font-size: 15px;
                background-color: white;
            }
            h1 {
                font-size: 28pt;
                text-align: center;
                color: black;
                padding-bottom: 70px;
            }
            table {
                margin:auto; 
                width: 70%;
                height: 80%;
            }
            caption {
                font-size: 14pt;
                font-family: arial black, tahoma;
            }
            .number{
                text-align: center;
                font-size: 16pt;
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            }
            .id{
                width: 2%;
                height: 2%;
                text-align: center;
                font-size: 16pt;
                font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;

            }
            .first{
                border: 3px solid black;
                font-size: 16pt;
                font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
            }
            tr{

                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            }
            .but{

                width: 30%;
                float: right;
                text-align: center;
                font-size: 20px;
            }
        </style>

    </head>
    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1>Inserir cidades</h1>
                    <form method="post" action="router.php?op=9" class="form-group">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome">
                        </div>

                        <div class="form-group">
                            <label for="estado_id">Estado:</label>
                            <select name="estado_id" class="form-control">
                                <option value="">Selecione:</option>
                                <!-- Estados //-->
                                <?php foreach ($lista as $e): ?>
                                    <option value="<?= $e['id'] ?>"><?= $e['nome'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary but" value="Cadastrar">
                        <input type="reset" class="btn btn-warning but" value="Limpar">

                    </form>

                </div>
                <div class="col-md-2"></div>
            </div>
        </div>




    </body>
</html>
