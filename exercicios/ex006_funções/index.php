<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Valor Absoluto</h1>
        <?php
            # função abs() retorna o valor sem sinal
            $absoluto = abs(-2000);
            echo $absoluto;
        ?>

        <h1>Conversor de Bases</h1>
        <?php
            # função base_convert() converte base de números
            # 254 é o numero a ser convertido
            # 10 é a base do número a ser convertido
            # 8 é a base em que o número será transformado
            $convert = base_convert(254, 10, 8);
            echo $convert;
        ?>

        <h1>Arredondamento</h1>
        <?php 
            # arredonda para cima
            $cima = ceil(14.1);
            echo $cima . " ";

            # arredonda para baixo
            $baixo = floor(12.99);
            echo $baixo. " ";

            # arredondamento padrão
            $padrao = round(20.50);
            echo $padrao;
        ?>

        <h1>Hipotenusa</h1>
        <?php 
            # só colocar os valores dos catetos
            $hipotenusa = hypot(4, 3);
            echo $hipotenusa;
        ?>

        <h1>Divisão inteira</h1>
        <?php 
            # resultado inteiro da divisão
            $inteiro = intdiv(5, 2);
            echo $inteiro;
        ?>

        <h1>Valor mínimo e máximo</h1>
        <?php 
            # retorna o valor mínimo dentro da função
            $minimo = min(8, 3, 2, 0, 7, 4, -5, -3);
            echo $minimo . " ";

            # retorna o valor máximo dentro da função
            $maximo = max(8, 3, 2, 0, 7, 4, -5, -3);
            echo $maximo;
        ?>

        <h1>Valor de pi</h1>
        <?php 
            # retorna o valor de pi
            $pi = pi();
            echo $pi;
        ?>

        <h1>Funções trigonométricas</h1>
        <?php 
            # função seno
            $seno = sin(30);
            echo $seno . " ";

            # função coseno
            $coseno = cos(30);
            echo $coseno . " ";

            # função tangente
            $tangente = tan(30);
            echo $tangente;
        ?>

        <h1> Raízes de um número</h1>
        <?php 
            # não precisa fazer função
            # primeiro exemplo raiz quadrada
            $quadrada = 9 ** (1/2);
            echo $quadrada . " ";

            # raiz cubica
            $cubica = 64 ** (1/3);
            echo $cubica;

            # é só mudar o divisor pela raiz que você quer
        ?>
    </main>
</body>
</html>