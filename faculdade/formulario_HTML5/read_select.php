<?php 
    require_once "create_insert.php";

    $instrucaoSQL = "Select id, nome, cpf, email, nascimento From cliente";
    $resultSet = $dsn -> query($instrucaoSQL);

    // Destruindo o object statement e fechando a conexão
    $stmt = null;
    $dsn = null;
?>