
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION["inserted"])) {
    ?>
    <div class="alert alert-success" >
        <p><?= $_SESSION["inserted"] ?></p>
    </div>
    <?php unset($_SESSION["inserted"]);
}
?>

<?php
if (isset($_SESSION["NOTinserted"])) {
    ?>
      <div class="alert alert-danger"  >
        <p><?= $_SESSION["NOTinserted"] ?></p>
    </div>
    <?php unset($_SESSION["NOTinserted"]);
}
?>
 <?php
if (isset($_SESSION["updated"])) {
    ?>
    <div class="alert alert-success" >
        <p><?= $_SESSION["updated"] ?></p>
    </div>
    <?php unset($_SESSION["updated"]);
}
?>

<?php
if (isset($_SESSION["NOTupdated"])) {
    ?>
      <div class="alert alert-danger"  >
        <p><?= $_SESSION["NOTupdated"] ?></p>
    </div>
    <?php unset($_SESSION["NOTupdated"]);
}
?>
<?php
if (isset($_SESSION["deleted"])) {
    ?>
    <div class="alert alert-success" >
        <p><?= $_SESSION["deleted"] ?></p>
    </div>
    <?php unset($_SESSION["deleted"]);
}
?>

<?php
if (isset($_SESSION["NOTdeleted"])) {
    ?>
      <div class="alert alert-danger"  >
        <p><?= $_SESSION["NOTdeleted"] ?></p>
    </div>
    <?php unset($_SESSION["NOTdeleted"]);
}
?>
<?php
if (isset($_SESSION["add"])) {
    ?>
    <div class="alert alert-success" >
        <p><?= $_SESSION["add"] ?></p>
    </div>
    <?php unset($_SESSION["add"]);
}
?>

<?php
if (isset($_SESSION["NOTadd"])) {
    ?>
      <div class="alert alert-danger"  >
        <p><?= $_SESSION["NOTadd"] ?></p>
    </div>
    <?php unset($_SESSION["NOTadd"]);
}
?>
<?php
if (isset($_SESSION["NOTlogin"])) {
    ?>
      <div class="alert alert-danger"  >
        <p><?= $_SESSION["NOTlogin"] ?></p>
    </div>
    <?php unset($_SESSION["NOTlogin"]);
}
?>
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION["updated_op"])) {
    ?>
    <div class="alert alert-success" >
        <p><?= $_SESSION["updated_op"] ?></p>
    </div>
    <?php unset($_SESSION["updated_op"]);
}
?>

<?php
if (isset($_SESSION["NOTupdated_op"])) {
    ?>
      <div class="alert alert-danger"  >
        <p><?= $_SESSION["NOTupdated_op"] ?></p>
    </div>
    <?php unset($_SESSION["NOTupdated_op"]);
}
?>