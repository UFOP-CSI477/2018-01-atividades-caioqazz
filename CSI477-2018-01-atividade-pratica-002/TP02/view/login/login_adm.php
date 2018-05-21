
<?php include 'cabecalho.php'; ?>
<div class="row">
    <div class="container">
        <div class="col-md-2">   	
        </div>

        <div class="col-md-8 borda">

            <h1 class="text-center titulo">Login</h1>


            <form method="post" action="router.php?op=2" class="form-group">
              <div class="form-group"  id="name-group">

                    <label for="name">Email:</label>
                    <input type="text" name="name" class="form-control">

                    <div class="alert alert-danger" style="display: none" id="name-alert" >
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
                    <input type="submit" id="login" class="botao btn btn-success btn-lg " value="Entrar">
                </div>
            </form>
        </div>
        <div class="col-md-2">   	
        </div>

    </div>
</div>


<?php include 'rodape.php'; ?>
