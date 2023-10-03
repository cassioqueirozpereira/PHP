<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $numero = $_POST["numero"] ?? 0;
                $sucessor = sucessor($numero);
                $antecessor = antecessor($numero);
                function sucessor($teste) {
                    return $teste + 1;
                }
                function antecessor($teste) {
                    return $teste - 1;
                }
                echo "O número escolhido foi $numero";
                echo "<br>O antecessor é $antecessor";
                echo "<br>O sucessor é $sucessor";
            ?>
            <p><button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button></p>
        </p>
    </main>
</body>
</html>