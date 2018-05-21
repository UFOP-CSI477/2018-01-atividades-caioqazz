
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<?php include 'cabecalho_menu.php' ?>
<?php
if ( session_status() !== PHP_SESSION_ACTIVE )
 {
    session_start();
    echo $_SESSION["insert"];
}
if (isset($_SESSION["login"]) && $_SESSION["login"] == 1) {
    include './view/functions/menu_func_adm.php';
}
if (isset($_SESSION["login"]) && $_SESSION["login"] == 2) {
    include './view/functions/menu_func_op.php';
}
if (isset($_SESSION["login"]) && $_SESSION["login"] == 3) {
    include './view/functions/menu_func_paciente.php';
}
?>
<?php include 'alerts.php' ?>