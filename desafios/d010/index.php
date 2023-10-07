<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nasceu = $_POST["nasceu"] ?? 2000;
        date_default_timezone_set("America/Sao_Paulo");
        $ano_atual = date("Y");
        $ano = $_POST["ano"] ?? $ano_atual;
        $idade = subtracao($ano_atual, $nasceu);
        
        function subtracao($ano_atual, $nasceu) {
            return $ano_atual - $nasceu;
        }
    ?>
    <section>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <h1>Calculando a sua idade</h1>
            <label for="nasceu">Em que ano você nasceu?:</label>
            <input type="number" name="nasceu" id="nasceu" value="<?php echo $nasceu; ?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em . $ano_atual) </label>
            <input type="number" name="ano" id="ano" value="<?php echo $ano; ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </section>
    <main>
        <h2>Resultado</h2>
        <?php 
            echo "Quem nasceu em " . $nasceu . " vai ter <strong>" . $idade . " anos(s) </strong>em " . $ano_atual . "!"
        ?>
    </main>
</body>
</html>