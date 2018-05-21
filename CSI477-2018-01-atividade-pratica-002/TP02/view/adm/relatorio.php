<?php include 'cabecalho.php'; ?>
<?php include 'alerts.php'; ?>
<h1>Relatorio</h1>
<table class="table table-striped table-bordered table-hover text-center teste">

    <tr >
        <th class="text-center">Nome</th>
        <th class="text-center">Procedimento</th>
        <th class="text-center">Preço</th>
    </tr>

    <?php foreach ($lista as $linha): ?>
        <tr>
            <td><?= $linha['name'] ?></td>
            <td><?= $linha['procedures'] ?></td>
            <td><?= $linha['price'] ?></td>

        </tr>
    <?php endforeach ?>
     
     <?php foreach ($count as $count): ?>
    <tr>
        <td class="negrito">Total</td>
        <td class="negrito"><?= $count["totalcount"] ?></td>
         <?php foreach ($prices as $prices): ?>
        <td class="negrito"><?= $prices["totalprice"] ?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
   
    
    
</table>



<?php include 'rodape.php'; ?>



