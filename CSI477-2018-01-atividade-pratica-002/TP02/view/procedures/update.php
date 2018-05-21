<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Atualizar Procedimentos</title>

    </head>
    <body>


        <h1>Atualizar Procedimentos</h1>

        <form method="post" action="router.php?op=104" class="form-group">
           
               
                <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
                
                <label for="name">Nome:</label>
                <input type="text" name="name" value="<?= $_POST['name'] ?>">
                
                <label for="price">Preço:</label>
                <input type="text" name="price" value="<?= $_POST['price'] ?>">
                
                  
                
                <input type="submit"  value="Atualizar">
                <input type="reset" value="Limpar">
           
        </form>




    </body>
</html>
