<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo1 = $_GET["dividendo"] ?? 0;
        $divisor1 = $_GET["divisor"] ?? 1;
    ?>
    <header>
        <h1>Anatomia de uma Divisão</h1>
    </header>
    <section>
        <h1>Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo1?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor1?>">
            <input type="submit" value="Analisar">
        </form>
    </section>
    <main>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resultado = intdiv($dividendo1, $divisor1);
            $resto = $dividendo1 % $divisor1;
            echo "$dividendo1 $divisor1 <br>$resto $resultado";
        ?>
    </main>
</body>
</html>