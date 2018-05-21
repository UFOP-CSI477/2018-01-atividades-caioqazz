<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alterar Usuarios</title>

    </head>
    <body>


        <h1>Alterar Usuarios</h1>


        <form method="post" action="router.php?op=304" class="form-group">
           
                <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
                
                <label for="name">Nome:</label>
                <input type="text" name="name" value="<?= $_POST['name'] ?>">
                
                <label for="email">Email:</label>
                <input type="text" name="email" value="<?= $_POST['email'] ?>">
                
                 <label for="type">Tipo:</label>
                 <select name="user_id">
                    <option value="0">Selecione:</option>
                    <option value="1">Administrador</option>
                    <option value="2">Operador</option>
                    <option value="2">Operador</option>
                <input type="text" name="type" value="<?= $_POST['type'] ?>">
                 </select>
                <label for="remember_token">Qual seu animal preferido?</label>
                <input type="text" name="remember_token" value="<?= $_POST['remember_token'] ?>">
                
                 <label for="password">Senha:</label>
                <input type="text" name="password">
                
                
                <input type="submit"  value="Alterar">
                <input type="reset" value="Limpar">
            
        </form>




    </body>
</html>
