<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página protegida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Pequeno teste com Login</h1>
    </header>
    <section>
        <h2><a href="protegida.php">Protegida</a></h2>
        <?php
            session_start();
            if (isset($_SESSION["usuario"])) {
                ?>
                <a href="logout.php">Logout</a>
                <?php
            }
        ?>
    </section>
</body>
</html>