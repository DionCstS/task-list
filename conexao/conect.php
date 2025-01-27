<?php 
    $dsn = "mysql:host=localhost;dbname=tarefas_pdo;charset=utf8";
    $user = "root";
    $pass = "admin";

    try {
        $conn = new PDO($dsn,$user,$pass);
    }catch(PDOException $e) 
    {
        echo "erro: $e";
    }
    
?>