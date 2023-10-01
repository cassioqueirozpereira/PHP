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
        $num = 10;
        $num_hex = 0xA;
        $num_bin = 0b1010;
        $num_octal = 012;
        echo "O valor é $num, $num_hex, $num_bin, $num_octal";

        $var = "Cássio";
        var_dump($var); # serve para mostrar detalhes da variável

        $num = 3e2; # 3 X 10^2 (10 elevado a 2)
        echo "O valor é $num";
    ?>
</body>
</html>