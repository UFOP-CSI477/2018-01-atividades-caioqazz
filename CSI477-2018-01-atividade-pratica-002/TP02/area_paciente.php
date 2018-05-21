<?php
if ( session_status() !== PHP_SESSION_ACTIVE )
 {
    session_start();
}
if (isset($_SESSION["login"]) ) {
     if($_SESSION["login"] != 3){
       include 'prohibited.php';
   }
} else {
    include './view/login/login.php';
}
if (isset($_SESSION["login"]) && $_SESSION["login"] != 3) { 
     include 'cabecalho_menu.php';
     include 'rodape.php';


} 
if (isset($_SESSION["login"]) && $_SESSION["login"] == 3) {
    include './view/functions/welcome_paciente.php';
}

?>    
     