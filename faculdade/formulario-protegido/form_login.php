<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login do Usuário</h1>
    </header>
    <section>
        <?php
            if (isset($_GET["erro"]))
                echo("<hr/><h2>".$_GET['erro']."</h2><hr/>");
        ?>
        <form action="login.php" method="post">
            <p>Login: <input type="text" name="login" id="login"></p>
            <p>Senha: <input type="password" name="senha" id="senha"></p>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>