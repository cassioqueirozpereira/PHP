<?php 
    require_once "data_connection.php";

    $instrucaoSQL = "Select id, nome, cpf, email, nascimento From cliente";

    $resultSet = $dsn -> query($instrucaoSQL);

    print_r($resultSet -> fetchAll(PDO::FETCH_ASSOC));
?>