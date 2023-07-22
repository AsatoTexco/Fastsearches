<?php

session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}


$nome = filter_input(INPUT_POST,"nome");
$desc = filter_input(INPUT_POST,"desc");

$sql = $pdo->prepare("SELECT * FROM pesquisa WHERE id_user = :id");
$sql->bindValue(":id",$_SESSION['idP']);
$sql->execute();

if($sql->rowCount() == 5){

    $_SESSION['msgP'] = false;
    header("Location: menu.php");


}else{

    $sql = $pdo->prepare("INSERT INTO pesquisa (nome , descricao , id_user) VALUES (:nome ,:descr ,:id_user)");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":descr",$desc);
    $sql->bindValue(":id_user", $_SESSION['idP']);
    $sql->execute();

    $_SESSION['msgP'] = true;

    header("Location: menu.php");


}