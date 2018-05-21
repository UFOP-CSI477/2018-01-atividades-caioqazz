

<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_SESSION["login"]) && $_SESSION["login"] != 0) {
    echo $_SESSION["login"];
    echo $_SESSION["login"];
    ?>
    <p> Logado com sucesso</p>
    <?php unset($_SESSION["login"]);
} ?>

<?php include 'cabecalho.php'; ?>

<h1>Procedimentos oferecidos</h1>
<table class="table table-striped table-bordered table-hover text-center teste">

    <tr >
        <th class="text-center">Procedimentos</th>
        <th class="text-center">Preço</th>
    </tr>

<?php foreach ($lista as $linha): ?>
        <tr>

            <td ><?= $linha['name'] ?></td>
            <td >R$<?= $linha['price'] ?></td>
        </tr>
<?php endforeach ?>

</table>



<?php include 'rodape.php'; ?>



