<?php 
    require_once "data_connection.php";

    $nome = "Jose Antonio";
    $cpf = "00000000000";
    $email = "email@gmail.com";
    $nascimento = "1980-10-01";
    $id = 1;

    $stmt = $dsn -> prepare("UPDATE cliente SET nome = ?, cpf = ?, email = ?, nascimento = ? WHERE id = ?");

    $resultSet = $stmt -> execute([$nome, $cpf, $email, $nascimento, $id]);

    if ($resultSet)
        echo "Os dados foram atualizados com sucesso. \n\n";
    else {
        echo "Ocorreu um erro e não foi possível alterar os dados.";
        exit;
    }
?>