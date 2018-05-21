
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
            <a href="router.php?op=105" class="list-group-item">
                <i class="fa fa-comment-o"></i> Listar exames
            </a>
            <a href="router.php?op=106" class="list-group-item">
                <i class="fa fa-search"></i> Alterar preço
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

