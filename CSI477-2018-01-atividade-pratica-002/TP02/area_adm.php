<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION["login"])) {
   if($_SESSION["login"] == 3){
       include 'prohibited.php';
   }
} else {
    include './view/login/login_adm.php';
}

if (isset($_SESSION["login"]) && $_SESSION["login"] != 3) {
    include './view/functions/welcome_others.php';
}
?>    
