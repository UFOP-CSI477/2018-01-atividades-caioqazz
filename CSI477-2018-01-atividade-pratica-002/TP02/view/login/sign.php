
<?php include 'cabecalho.php'; ?>
<div class="row">
    <div class="container">
        <div class="col-md-1">   	
        </div>

        <div class="col-md-10 borda">

            <h1 class="text-center titulo">Cadastro</h1>

            <form method="post" action="router.php?op=302" class="form-group">
                <div class="form-group" id="name-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" class="form-control">

                    <div class="alert alert-danger" style="display: none"  id="name-alert">
                        <p>Informe o conteúdo desse campo corretamente.</p>
                    </div>
                </div>

                <div class="form-group"id="email-group" >

                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control">

                    <div class="alert alert-danger" style="display: none" id="email-alert" >
                       <p>Informe o conteúdo desse campo corretamente.</p>
                    </div>
                </div>

                <div class="form-group" id="remember_token-group" >
                    <label for="remember_token">Qual seu animal preferido?</label>
                    <input type="text" name="remember_token" class="form-control">
                    <div class="alert alert-danger" style="display: none" id="remember_token-alert">
                       <p>Informe o conteúdo desse campo corretamente.</p>
                    </div>
                </div>

                <div class="form-group" id="password-group" >
                    <label for="password">Senha:</label>
                    <input type="password" name="password" class="form-control">
                    <div class="alert alert-danger" style="display: none" id="password-alert" >
                       <p>Informe o conteúdo desse campo corretamente.</p>
                    </div>
                </div>
                <div class="grupobotoes">
                    <input type="submit" class="botao btn btn-success btn-lg " id="cadastrar" value="Cadastrar-se">
                    <a href="router.php?op=5"><input type="button" class="bot btn btn-danger btn-lg " value="Cancelar">
                        </div>
                        </form>


                        </div>
                        <div class="col-md-1">   	
                        </div>

                </div>
        </div>


        <?php include 'rodape.php'; ?>
