<?php 
include 'connect.php';
$res = $_POST['res1'];
$id = $_POST['id'];
//session_start();
$result = $pdo->query("SELECT * FROM resposta WHERE id= $id AND resposta = '" .$res. "' ");


if ($result->rowCount () > 0) { // Verifica se existe cadastro semelhante
                                      
    // Exibe mensagem notificadora e pergunta se deseja forçar o cadastro
    echo 'Resposta correta';
}else{
        echo 'resposta incorreta tente novamente';
    }

$level = $pdo->prepare("SELECT ");