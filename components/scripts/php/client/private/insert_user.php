<?php

    include 'connect.php';

    $nome = $_POST['nome'];
    $email = $_POST['usuario'];
    $telefone = $_POST['senha'];

    //O banco está inserindo valores na respectiva ordem do EXECUTE
    $result = $pdo->prepare("INSERT INTO users VALUES(null, ?, ?, ?)");
    $result->execute(array($_POST['nome'],  $_POST['usuario'],  $_POST['senha'], ));
    
    header("Location: index.php");
?>