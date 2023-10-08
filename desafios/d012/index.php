<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_POST["segundos"] ?? 10000;
    ?>
    <section>
        <form action="<?=$_SERVER["PHP_SELF"];?>" method="post">
            <h1>Calculadora de Tempo</h1>
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <main>
        <?php
            $resto = $segundos;
            # semana 604800
            $semana = (int) semana($resto);
            $resto = $resto % 604800;

            function semana($resto) {
                return $resto / 604800;
            }

            # dia 86400
            $dia = (int) dia($resto);
            $resto = $resto % 86400;
            function dia( $resto) {
                return $resto / 86400;
            }
            
            # hora 3600
            $hora = (int) hora($resto);
            $resto =  $resto % 3600;
            function hora($resto) {
                return $resto / 3600;
            }

            # minuto 60
            $minuto = (int) minuto($resto);
            $resto = $resto % 60;
            function minuto($resto) {
                return $resto / 60;
            }

            # segundo 60
            $segundo = $resto;

            echo "<h2>Resultado final</h2>
            <p>Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ",", ".") . " segundo(s)</strong> equivalem a um total de:</p>
            <ul>
                <li>" . $semana . " semana(s)</li>
                <li>" . $dia . " dia(s)</li>
                <li>" . $hora . " hora(s)</li>
                <li>" . $minuto . " minuto(s)</li>
                <li>" . $segundo . " segundo(s)</li>
            </ul>";
        ?>
    </main>
</body>
</html>