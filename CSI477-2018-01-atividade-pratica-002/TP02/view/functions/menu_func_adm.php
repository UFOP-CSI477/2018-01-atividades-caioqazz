
<div class="row">
    <div class="col-sm-4 col-md-3 sidebar">
        <div class="mini-submenu">

        </div>

        <div class="list-group">
            <span href="#" class="list-group-item active">
                Submenu
                <span class="pull-right" id="slide-submenu">
                    <i class="fa fa-times"></i>
                </span>
            </span>
            <a href="router.php?op=101" class="list-group-item">
                <i class="fa fa-comment-o"></i> Cadastrar procedimento
            </a>
            <a href="router.php?op=107" class="list-group-item">
                <i class="fa fa-search"></i> Excluir procedimento
            </a>
            <a href="router.php?op=107" class="list-group-item">
                <i class="fa fa-search"></i> Alterar procedimentos
            </a>

            <a href="router.php?op=107" class="list-group-item">
                <i class="fa fa-search"></i> Exibir todos procedimento
            </a>
             <a href="router.php?op=300" class="list-group-item">
                <i class="fa fa-search"></i> Listar clientes
            </a>
            <a href="router.php?op=207" class="list-group-item">
                <i class="fa fa-search"></i> Relatorio de requisições
            </a>
            
            <a href="router.php?op=305" class="list-group-item">
                <i class="fa fa-search"></i> Cadastrar Administrador
            </a>
            <a href="router.php?op=307" class="list-group-item">
                <i class="fa fa-search"></i> Cadastrar Operador
            </a>
            
           
        </div>
    </div>

    <?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (isset($_SESSION["login"])) {
        ?>

        <div class="col-md-9">

            <?php }
        ?>

