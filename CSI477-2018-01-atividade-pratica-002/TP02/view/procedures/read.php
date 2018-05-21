<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Procedures</title>
    </head>
    <body>

        <?php
        session_start();
        if (isset($_SESSION['mensagem'])) {
            echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
            unset($_SESSION['mensagem']);
        }
        ?>

        <h1>Tabela de Procedures</h1>
        <table>

            <tr >
                <th>id</th>
                <th>name</th>
                <th>price</th>
            </tr>

            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['name'] ?></td>
                    <td><?= $linha['price'] ?></td>
                      <td>
                        <form action="router.php?op=103" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="name" value="<?= $linha['name'] ?>">
                            <input type="hidden" name="price" value="<?= $linha['price'] ?>">
                            <input type="submit" value="Atualizar">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="name" value="<?= $linha['name'] ?>">
                            <input type="hidden" name="price" value="<?= $linha['price'] ?>">
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>








    </body>
</html>
