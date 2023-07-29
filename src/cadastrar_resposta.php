<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

// =================================================
// $idImaginario = $_GET['id'];

// sim, não ou meio termo 

// sim =        1
// meio termo = 2
// não =        3

// quem esta respondendo  XXXXXXXXXXXXXXX
// o que ele esta respondendo id pergunta XXXXXXXX

$id_pergunta = $_POST['pergunta'];
$id_entrevistado = $_POST['id_entrevistado'];

$resp = $_GET['resp'];

if($resp == 1){
    $resposta = "S";
}
elseif($resp == 2){
    $resposta = "M";
}
elseif($resp == 3){
    $resposta = "N";
}


$sql = $pdo->prepare("INSERT INTO resposta (id_entrevistado, resposta, id_pergunta) VALUES (:id_entrevistado , :resposta , :id_pergunta)");
$sql->bindValue(":id_entrevistado",$id_entrevistado);
$sql->bindValue(":resposta",$resposta);
$sql->bindValue(":id_pergunta",$id_pergunta);
$sql->execute();
  








echo json_encode($resposta); 