<?php include 'cabecalho.php'; ?>
        <h1>Tabela de Clientes</h1>
        <table class="table table-striped table-bordered table-hover text-center teste">

            <tr >
                <th>Nome</th>
                <th>Email</th>
                
            </tr>

            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?= $linha['name'] ?></td>
                    <td><?= $linha['email'] ?></td>
               
                </tr>
            <?php endforeach ?>

        </table>




<?php include 'rodape.php'; ?>