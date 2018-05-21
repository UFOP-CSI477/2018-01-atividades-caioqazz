
<?php include 'cabecalho.php'; ?>

<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION['mensagem'])) {
    echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
    unset($_SESSION['mensagem']);
}
?>

<h1>Meus Exames</h1>
<?php include 'alerts.php'; ?>
<table class="table table-striped table-bordered table-hover text-center teste">
    <thead >
        <tr >
            <th class="text-center">Procedimento</th>
            <th class="text-center">Data</th>
            <th></th>
            <th></th>
        </tr> 
    </thead>

<tbody>
    <?php foreach ($lista as $linha): ?>
    


            <td><?= $linha['name'] ?></td>
            <td><?= $linha['date'] ?></td>
            <td>
                <form action="router.php?op=203" method="post">
                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                    <input type="hidden" name="user_id" value="<?= $linha['user_id'] ?>">
                    <input type="hidden" name="procedure_id" value="<?= $linha['procedure_id'] ?>">
                    <input type="hidden" name="date" value="<?= $linha['date'] ?>">
                    <input type="submit" class = "btn btn-warning btn-block " value="Remarcar">
                </form>
            </td>
            <td>
                <form action="router.php?op=205" method="post">
                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                    <input type="hidden" name="user_id" value="<?= $linha['user_id'] ?>">
                    <input type="hidden" name="procedure_id" value="<?= $linha['procedure_id'] ?>">
                    <input type="hidden" name="date" value="<?= $linha['date'] ?>">
                    <input type="submit" class = "btn btn-danger btn-block " value="Desmarcar">
                </form>
            </td>
        </tbody>
    <?php endforeach ?>

</table>







<?php include 'rodape.php'; ?>
