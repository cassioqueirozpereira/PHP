<h1>Exemplos de como atribuir valores nos arrays PHP</h1>
<?php 
    # Pode ser atribuido valores dessa forma

    $frutas_vermelhas = array(
        "melancia",
        "cereja",
        "framboesa",
        "morango"
    );

    # Ou dessa forma

    $frutas_vermelhas2 = [
        "melancia",
        "cereja",
        "framboesa",
        "morango"
    ];

    # Também podemos atribuir o valor escolhendo o indice do valor

    $frutas_vermelhas3[0] = "melancia";

    # Também podemos atribuir o valor com o indice vazio, assim ele mesmo vai adicionando os indices

    $frutas_vermelhas4[] = "melancia";

    $frutas_citricas = array(
        "laranja",
        "limão",
        "abacaxi",
        "mexerica"
    );

    $frutas_tropicais = array(
        "goiaba",
        "maracuja",
        "banana",
        "manga"
    );

    echo "\n\nFrutas Vermelhas\n";
    print_r($frutas_vermelhas);

    echo "\n\nFrutas Vermelhas2\n";
    print_r($frutas_vermelhas2);

    echo "\n\nFrutas Vermelhas3\n";
    print_r($frutas_vermelhas3);

    echo "\n\nFrutas Vermelhas4\n";
    print_r($frutas_vermelhas4);

    echo "\n\nFrutas Citricas\n";
    print_r($frutas_citricas);

    echo "\n\nFrutas Tropicais\n";
    print_r($frutas_tropicais);
    ?>
    <h1>Matriz em array PHP</h1>
    <?php
    $arrayMultidimensional = array(
        'vermelhas' => array(
            'melancia',
            'cereja',
            'framboesa',
            'morango'
        ),
        'citricas' => array(
            'laranja',
            'limão',
            'abacaxi',
            'mexerica'
        ),
    );

    echo "Array Multidimensional\n";
    print_r($arrayMultidimensional);
    ?>
    <h1>Funções em PHP</h1>
    <?php
    $num1 = 10;
    $num2 = 15;

    # Foi passado os parâmetros($num1 e $num2) da função soma.
    $num3 = soma($num1,$num2);

    imprimir_resultado($num3);

    # Como ja foi passado os parâmetros, pode até colocar outra variável que vai ser usado os valores do parâmetro soma.
    function soma($numero1, $numero2) {
        return $numero1 + $numero2;
    }

    function imprimir_resultado($numero) {
        echo "O resultado da operação é igual a: " . $numero;
    }
?>