<?php 
    require_once "data_connection.php";

    $stmt = $dsn -> prepare("INSERT INTO cliente(nome, cpf, email, nascimento) VALUES (?, ?, ?, ?)");

    $resultSet = $stmt -> execute([
        $_POST["nome"],
        $_POST["cpf"],
        $_POST["email"],
        $_POST["nascimento"]
    ]);

    if ($resultSet)
        echo "Os dados foram inseridos com sucesso.";
    else {
        echo "Ocorreu um erro e não foi possível inserir os dados.";
        exit;
    }
?>