<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        /*
            0x = hexadecimal
            0b = binário
            0 = octal
         */
        # 10 é decimal
        $num = 10;
        # A é hexadecimal
        $num_hex = 0xA;
        # 1010 é binário
        $num_bin = 0b1010;
        # 12 é octal
        $num_octal = 012;
        echo "O valor é $num, $num_hex, $num_bin, $num_octal <br>";

        $var = "Cássio";
        var_dump($var); # serve para mostrar detalhes da variável

        $num = 3e2; # 3 X 10^2 (10 elevado a 2)
        echo "<br>O valor é $num";
    ?>
</body>
</html>