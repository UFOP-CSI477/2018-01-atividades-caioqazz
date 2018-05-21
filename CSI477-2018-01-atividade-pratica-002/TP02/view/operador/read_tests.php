
<?php include 'cabecalho.php'; ?>



<h1>Exames</h1>
<?php include 'alerts.php'; ?>
<table class="table table-striped table-bordered table-hover text-center teste">
    <thead >
        <tr >
            <th class="text-center">Procedimento</th>
            <th class="text-center">Data</th>
            
        </tr> 
    </thead>

<tbody>
    <?php foreach ($lista as $linha): ?>
    


            <td><?= $linha['name'] ?></td>
            <td><?= $linha['date'] ?></td>
        </tbody>
    <?php endforeach ?>

</table>







<?php include 'rodape.php'; ?>
