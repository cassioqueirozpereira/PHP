<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_POST["numero"] ?? 0;
    ?>
    <section>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <h1>Informe um Número</h1>
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?php echo "$numero";?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </section>
    <main>
    <h2>Resultado Final</h2>
        <?php 
            $raiz2 = $numero ** (1/2);
            $raiz3 = $numero ** (1/3);
            echo "<p>Analisando o <strong>número " . $numero . "</strong>, temos:</p>";
            echo "<ul>
                    <li>A sua raiz quadrada é <strong>" . $raiz2 . "</strong></li>
                    <li>A sua raiz quadrada é <strong>" . $raiz3 . "</strong></li>
                </ul>";
        ?>
    </main>
</body>
</html>