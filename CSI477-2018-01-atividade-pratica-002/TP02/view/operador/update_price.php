<?php include 'cabecalho.php'; ?>


<h1>Atualizar Procedimento</h1>

<form method="post" action="router.php?op=104" class="form-group">


    <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
    <div class="form-group" id="price-group" >     
        <label for="price">Preço:</label>
        <input type="text" class="form-control" name="price" value="<?= $_POST['price'] ?>">

        <div class="alert alert-danger" style="display: none" id="price-alert" >
            <p>Informe o conteúdo deste campo corretamente.</p>
        </div>
    </div>       

    <input type="submit" id="update_price" class="botao btn btn-lg btn-info" value="Atualizar">

</form>




</body>
</html>
<?php include 'rodape.php'; ?>