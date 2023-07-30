<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

// =================================================


$id_pesquisa = filter_input(INPUT_POST,"id");
$pergunta = filter_input(INPUT_POST, "pergunta");

echo($pergunta);

if(!isset($id_pesquisa)){
    header("Location: index.php");
}

$sql = $pdo->prepare("SELECT * FROM  pergunta WHERE id_pesquisa = :id");
$sql->bindValue(":id",$id_pesquisa);
$sql->execute();

if($sql->rowCount() == 10){

    // MENSAGEM DE ERRO !!!!!!
    $_SESSION['msgP_pergunta'] =  false;
    header("Location: perguntas.php?id=".$id_pesquisa);

}else{

    $sql = $pdo->prepare("INSERT INTO pergunta (nome ,  id_pesquisa) VALUES (:pergunta , :id)");
    $sql->bindValue(":pergunta", $pergunta);
    $sql->bindValue(":id", $id_pesquisa);
    $sql->execute();

    $_SESSION['msgP_pergunta'] =  true;
    header("Location: perguntas.php?id=".$id_pesquisa);

   
}

