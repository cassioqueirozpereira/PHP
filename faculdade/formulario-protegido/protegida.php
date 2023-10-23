<!DOCTYPE html>
<?php 
    session_start();
    if (!isset($_SESSION["usuario"]))
        header("Location: form_login.php", true, 301);
    else {
        ?>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Protegido</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <header>
                <h1>Olá <?php echo ($_SESSION["usuario"]) ?></h1>
            </header>
                <section>
                    <h2><a href="index.php">Retornar</a></h2>
                </section>
        </body>
        </html>
        <?php
    }
?>
        