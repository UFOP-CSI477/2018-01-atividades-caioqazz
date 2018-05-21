<?php include 'cabecalho.php'; ?>

<h1>Selecione Usuario</h1>


<form method="post" action="router.php?op=206" class="form-group">

<div class="form-group" id="user_id-group" >
    <label for="user_id">Usuario:</label>
    <select name="user_id" id ="user_id "class="form-control">
        
        <!-- Estados //-->
        <?php foreach ($allusers as $e): ?>
                <option value="<?= $e['id'] ?>"><?= $e['name'] ?></option>
        <?php endforeach ?>
    </select>
 <div class="alert alert-danger" style="display: none" id="user_id-alert" >
            <p>Informe o conteúdo deste campo corretamente.</p>
        </div>
    </div>  

    <input type="submit" id="selectuser"class=" botao btn btn-info " value="Buscar" >


</form>




<?php include 'rodape.php'; ?>