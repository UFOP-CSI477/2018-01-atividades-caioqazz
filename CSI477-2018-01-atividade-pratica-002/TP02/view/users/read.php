<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Usuarios</title>
    </head>
    <body>

        <?php
        session_start();
        if (isset($_SESSION['mensagem'])) {
            echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
            unset($_SESSION['mensagem']);
        }
        ?>

        <h1>Tabela de Usuarios</h1>
        <table>

            <tr >
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>type</th>
                <th>remember_token</th>
            </tr>

            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['name'] ?></td>
                    <td><?= $linha['email'] ?></td>
                    <td><?= $linha['type'] ?></td>
                    <td><?= $linha['remember_token'] ?></td>
                      <td>
                        <form action="router.php?op=303" method="post">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="name" value="<?= $linha['name'] ?>">
                            <input type="hidden" name="email" value="<?= $linha['email'] ?>">
                            <input type="hidden" name="type" value="<?= $linha['type'] ?>">
                            <input type="hidden" name="remember_token" value="<?= $linha['remember_token'] ?>">
                            <input type="submit" value="Atualizar">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                          <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <input type="hidden" name="name" value="<?= $linha['name'] ?>">
                            <input type="hidden" name="email" value="<?= $linha['email'] ?>">
                            <input type="hidden" name="type" value="<?= $linha['type'] ?>">
                            <input type="hidden" name="remember_token" value="<?= $linha['remember_token'] ?>">
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>








    </body>
</html>
