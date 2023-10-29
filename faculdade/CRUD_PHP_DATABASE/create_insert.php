<?php 
    require_once "data_connection.php";

    $nome = "Jose";
    $cpf = "00000000000";
    $email = "email@gmail.com";
    $nascimento = "1980-10-01";

    $stmt = $dsn -> prepare("INSERT INTO cliente(nome, cpf, email, nascimento) VALUES (?, ?, ?, ?)");

    $resultSet = $stmt -> execute([$nome, $cpf, $email, $nascimento]);

    if ($resultSet)
        echo "Os dados foram inseridos com sucesso. \n\n";
    else {
        echo "Ocorreu um erro e não foi possível inserir os dados.";
        exit;
    }
?>  