<?php  if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
if (isset($_SESSION["login"])){
?>
  
</div>  

<?php }?>

</div>
         </div>
     
</body>
<div class="footer">
   <p>&copy Sistema de Controle de Solicitações de Análises Laboratoriais</p>
</div>
</html>