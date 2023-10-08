<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_POST["preco"] ?? 0;
        $porcentagem = $_POST["porcentagem"] ?? 0;
    ?>
    <section>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <h1>Reajustador de Preços</h1>
            <label for="preco">Preço do Produto (R$):</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">

            <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="p">50</span>%</strong>): </label>
            <input type="range" name="porcentagem" id="porcentagem" oninput="muda_valor()">

            <input type="submit" value="Reajustar">
        </form>
    </section>
    <main>
        <h2>Resultado do Reajuste</h2>
        <?php
            # transformando o $porcentagem em numero ideal para calculo de porcentagem.
            $ideal = transformar($porcentagem);

            function transformar($porcentagem) {
                return $porcentagem / 100;
            }

            $valor_acrescimo = acrescimo($ideal, $preco);
            
            function acrescimo($ideal, $preco) {
                return $ideal * $preco;
            }

            $reajustado = reajuste($valor_acrescimo, $preco);

            function reajuste($valor_acrescimo, $preco) {
                return $valor_acrescimo + $preco;
            }

            echo "<p>O produto que custava R$" . number_format($preco, 2, ",", ".") . " com <strong>" . $porcentagem . "% de aumento </strong>vai passar a custar <strong>R$" . number_format($reajustado, 2, ",", ".") . "</strong> a partir de agora. </p>"
        ?>
    </main>
    <script>
        function muda_valor() {
            p.innerText = porcentagem.value;
        }
    </script>
</body>
</html>