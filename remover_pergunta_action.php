<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

// =================================================

$id = filter_input(INPUT_GET,'id');
echo($id);

if($id){

    $sql = $pdo->prepare("DELETE FROM pergunta WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();
    
    $sql = $pdo->prepare('DELETE FROM resposta WHERE id_pergunta = :id');
    $sql->bindValue(":id",$id);
    $sql->execute();


    $_SESSION['msgP_removerPergunta '] = true;
    header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));

}