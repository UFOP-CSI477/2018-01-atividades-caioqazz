<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inserir Procedimentos</title>

    </head>
    <body>


        <h1>Inserir Procedimentos</h1>


        <form method="post" action="router.php?op=202" class="form-group">
           
                  
                <label for="user_id">Usuario:</label>
                <select name="user_id">
                    <option value="">Selecione:</option>
                    <!-- Estados //-->
                    <?php foreach ($allusers as $e): ?>
                        <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                    <?php endforeach ?>
                </select>
                
                <label for="procedure_id">Procedimento:</label>
                <select name="procedure_id">
                    <option value="">Selecione:</option>
                    <!-- Estados //-->
                    <?php foreach ($allprocedures as $e): ?>
                        <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                    <?php endforeach ?>
                </select>
                
                <label for="date">Data:</label>
                <input type="date" name="date">
                
                <input type="submit"  value="Cadastrar">
                <input type="reset" value="Limpar">
            
        </form>




    </body>
</html>
