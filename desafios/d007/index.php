<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET["salario"] ?? 1320;
    ?>
    <section>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" value="<?php echo $salario; ?>">
            <p>Considerando o salário mínimo de R$ 1320,00</p>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <main>
        <h2>Resultado Final</h2>
        <?php
            $minimo = 1320;

            $divi = divisao($salario, $minimo);

            function divisao ($salario, $minimo) {
                return $salario / $minimo;
            }

            $resultado_inteiro = inteiro($divi);

            function inteiro($divi) {
                return (int) $divi;
            }

            $resultado_fracionado = subtracao($divi, $resultado_inteiro);

            function subtracao ($divi, $resultado_inteiro) {
                return $divi - $resultado_inteiro;
            }

            

            $resultado_real = verdadeiro($resultado_fracionado, $minimo);

            function verdadeiro ($resultado_fracionado, $minimo) {
                return $resultado_fracionado * $minimo;
            }
            
            echo "Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " ganha <strong>" . $resultado_inteiro . " salário(s) mínimo(s) + R$ " . number_format($resultado_real, 2, ",", ".");
        ?>
    </main>
</body>
</html>