<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor associativo</title>
</head>
<body>
    <?php 
        $equipe = array(
            "Comercial" =>
                ["Ana", "Carlos", "Fabio"],
            "Financeiro" =>
                ["João", "Fabiana"],
            "Operacional" =>
                ["Beatriz", "Maria", "Eduardo"]
        );
        echo("<ul>");
        foreach ($equipe as $setor => $funcionarios) {
            echo("<li>$setor</li><ol>");
            foreach ($funcionarios as $nome)
                echo("<li>$nome</li>");
            echo("</ol>");
        }
        echo("</ul>");
    ?>
</body>
</html>