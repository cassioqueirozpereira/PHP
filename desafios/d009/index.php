<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Ponderada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num1 = $_POST["num1"] ?? 1;
        $num2 = $_POST["num2"] ?? 1;
        $peso1 = $_POST["peso1"] ?? 1;
        $peso2 = $_POST["peso2"] ?? 1;
    ?>
    <?php echo $num1; ?>
    <section>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <h1>Médias Aritméticas</h1>
            <label for="num1">1º Valor:</label>
            <input type="number" name="num1" id="num1" value="<?php echo $num1; ?>">
            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="peso1" value="<?php echo $peso1; ?>">
            <label for="num2">2º Valor:</label>
            <input type="number" name="num2" id="num2" value="<?php echo $num2; ?>">
            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="peso2" value="<?php echo $peso2; ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </section>
    <main>
        <h2>Cálculo das Médias</h2>
        <?php
            $simples = simples($num1, $num2);
            function simples($mula1, $mula2) {
                return ($mula1 + $mula2) / 2;
            }

            $ponderada = ponderada($num1, $num2, $peso1, $peso2);
            function ponderada($num1, $num2, $peso1, $peso2) {
                return ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);
            }

            echo "<p>Analisando os valores " . $num1 . " e " . $num2 . ":</p>
            <ul>
                <li>A <strong>Média Aritmética Simples </strong>entre os valores é igual a " . $simples . ".</li>
                <li>A <strong>Média Aritmética Ponderada </strong>com pesos " . $peso1 . " e " . $peso2 . " é " .$ponderada . ". </li>
            </ul>"
        ?>
    </main>
</body>
</html>