<?php

require 'config.php';


$nome = filter_input(INPUT_POST,'nome');
$user = filter_input(INPUT_POST,'usuario');
$senha = filter_input(INPUT_POST,'senha');

$sql = $pdo->prepare("SELECT * FROM user WHERE  user = :user");
$sql->bindValue(":user",$user);
$sql->execute();

if($sql->rowCount() > 0){

    echo("Uga achei algm");
    header("Location: cadastrar.php");

}else{

    $sql = $pdo->prepare("INSERT INTO user (nome, user, senha) VALUES (:nome , :user, :senha)");
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":user",$user);
    $sql->bindValue(":senha",$senha);

    $sql->execute();

    header("Location: index.php");

}