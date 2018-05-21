<?php include 'cabecalho.php'; ?>
<?php include 'alerts.php'; ?>
<h1>Lista de Procedimentos</h1>
<table class="table table-striped table-bordered table-hover text-center teste">

    <tr >
        <th class="text-center">Procedimentos</th>
        <th class="text-center">Preço</th>
         <th class="text-center"></th>
          <th class="text-center"></th>
    </tr>

   <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?= $linha['name'] ?></td>
                    <td><?= $linha['price'] ?></td>
                      <td>
                        <form action="router.php?op=108" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="name" value="<?= $linha['name'] ?>">
                            <input type="hidden" name="price" value="<?= $linha['price'] ?>">
                            <input type="submit" class = "btn btn-warning btn-block " value="Atualizar">
                        </form>
                    </td>
                     <td>
                        <form action="router.php?op=110" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="name" value="<?= $linha['name'] ?>">
                            <input type="hidden" name="price" value="<?= $linha['price'] ?>">
                            <input type="submit" class = "btn btn-danger btn-block " value="Remover">
                        </form>
                    </td>
                   
                </tr>
            <?php endforeach ?>
</table>



<?php include 'rodape.php'; ?>



