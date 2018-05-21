<?php include 'cabecalho.php'; ?>

<h1>Remarcar Teste</h1>


<form method="post" action="router.php?op=204" class="form-group">

    <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
    <?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    ?>

    <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>">

    <div class="form-group" >
        <label for="procedure_id">Procedimento:</label>
        <select name="procedure_id" class="form-control">
            <!-- Estados //-->
            <?php foreach ($allprocedures as $e): ?>
                <?php if ($e['id'] == $_POST['procedure_id']) { ?>

                    <option value="<?= $e['id'] ?>" selected><?= $e['name'] ?></option>
                <?php } else {
                    ?>
                    <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
                <?php } ?>
            <?php endforeach ?>
        </select>
        <div class="alert alert-danger" style="display: none" >
        <p>Informe seu nome corretamente.</p>
    </div>
</div>  
<div class="form-group" >
    <label for="date">Data:</label>
    <input type="date" class="form-control" name="date" value="<?= $_POST['date'] ?>">
    <div class="alert alert-danger" style="display: none" >
        <p>Informe seu nome corretamente.</p>
    </div>
</div>   
<input type="submit" class="botao btn btn-warning btn-lg" value="Atualizar" >

</form>




<?php include 'rodape.php'; ?>