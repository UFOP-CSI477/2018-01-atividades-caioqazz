<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar Usuarios</title>

    </head>
    <body>


        <h1>Cadastrar Usuarios</h1>


        <form method="post" action="router.php?op=302" class="form-group">
           
                <label for="name">Nome:</label>
                <input type="text" name="name">
                
                <label for="email">Email:</label>
                <input type="text" name="email">
                
                <label for="remember_token">Qual seu animal preferido?</label>
                <input type="text" name="remember_token">
                
                 <label for="password">Senha:</label>
                <input type="text" name="password">
                
                
                <input type="submit"  value="Cadastrar">
                <input type="reset" value="Limpar">
            
        </form>




    </body>
</html>
