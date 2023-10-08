<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_POST["saque"] ?? 0;
    ?>
    <section>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            <h1>Caixa Eletrônico</h1>
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" step="5" value="<?= $saque?>">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </section>
    <main>
        <?php
            # nota de 100
            $cem = (int) cem($saque);
            $resto = $saque % 100;

            function cem($saque) {
                return $saque / 100;
            }

            # nota de 50
            $cinquenta = floor(cinquenta($resto));
            $resto %= 50;

            function cinquenta($resto) {
                return $resto / 50;
            }

            # nota de 10
            $dez = floor(dez($resto));
            $resto %= 10;

            function dez($resto) {
                return $resto / 10;
            }

            # nota de 5
            $cinco = cinco($resto);

            function cinco($resto) {
                return $resto / 5;
            }
        ?>
            <h2>Saque de R$ <?= number_format($saque, 2, ",", ".") ?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img class="nota" src="imagens/100-reais.jpg" alt="Nota de R$ 100,00">x<?= $cem?></li>
                <li><img class="nota" src="imagens/50-reais.jpg" alt="Nota de R$ 50,00\">x<?= $cinquenta?></li>
                <li><img class="nota" src="imagens/10-reais.jpg" alt="Nota de R$ 10,00">x<?= $dez?></li>
                <li><img class="nota" src="imagens/5-reais.jpg" alt="Nota de R$ 5,00">x<?= $cinco?></li>
            </ul>"
    </main>
</body>
</html>