<?php 
    require_once "data_connection.php";

    $instrucaoSQL = "Select id, nome, cpf, email, nascimento From cliente";

    $resultSet = $dsn -> query($instrucaoSQL);

    while ($row = $resultSet -> fetch()) {
        echo $row["id"] . "\t";
        echo $row["nome"] . "\t";
        echo $row["cpf"] . "\t";
        echo $row["email"] . "\t";
        echo $row["nascimento"] . "\n";
    }
?>