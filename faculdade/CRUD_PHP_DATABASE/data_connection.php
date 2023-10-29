<?php 
    $host = "localhost";
    $port = 3306;
    $user = "root"; // mysql
    $pass = "";
    $name = "minimundo";

    try {
        $dsn = new PDO("mysql:host=$host;port=$port;dbname=$name;user=$user;pass=$pass");
    }
    catch (PDOException $e) {
        echo "A conexão falhou e retornou a seguinte mensagem de erro: " . $e -> getMessage();
    }
?>