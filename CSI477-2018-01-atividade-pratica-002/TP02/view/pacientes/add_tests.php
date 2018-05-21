<?php include 'cabecalho.php'; ?>

<h1>Marcar Exame</h1>



<form method="post" action="router.php?op=202" class="form-group">

    <?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    ?>
    <input type = "hidden" name = "user_id" value = "<?= $_SESSION['id']; ?>">
    <div class="form-group" id="procedure_id-group" >
        <label for = "procedure_id">Procedimento:</label>
        <select name = "procedure_id" id="procedure_id" class="form-control">
            <option value = "0">Selecione:</option>
            <!--Estados //-->
            <?php foreach ($allprocedures as $e):
                ?>
                <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
            <?php endforeach ?>
        </select>
        <div class="alert alert-danger" style="display: none" id="procedure_id-alert">
            <p>Informe o conteúdo deste campo corretamente.</p>
        </div>
    </div>   
    <div class="form-group" id="date-group" >
    <label for="date">Data:</label>
    <input type="date" name="date" class="form-control">
    <div class="alert alert-danger" style="display: none" id="date-alert" >
            <p>Informe o conteúdo deste campo corretamente.</p>
        </div>
    </div>  
    <input type="submit" id="addtest" class = "botao btn btn-success btn-lg"value="Cadastrar">

</form>




<?php include 'rodape.php'; ?>