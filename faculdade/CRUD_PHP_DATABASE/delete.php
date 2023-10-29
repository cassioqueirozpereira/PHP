<?php
    require_once "data_connection.php";

    $id = 1;
    $stmt = $dsn -> prepare("DELETE FROM cliente WHERE id = ?");
    $resultSet = $stmt -> execute([$id]);

    if ($resultSet)
        echo "Os dados foram removidos com sucesso. \n\n";
    else {
        echo "Ocorreu um erro e não foi possível remover os dados.";
        exit;
    }
?>