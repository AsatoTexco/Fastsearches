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

    $sql = $pdo->prepare("DELETE FROM pesquisa WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();
 
    $sql = $pdo->prepare("DELETE FROM pergunta WHERE id_pesquisa = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();


    $_SESSION['msgP_removerP'] = true;
     
    header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));

}