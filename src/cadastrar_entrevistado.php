<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

// =================================================


$id_pesquisa = filter_input(INPUT_POST,'id_pesquisa');

$sql = $pdo->prepare("SELECT * FROM pergunta WHERE id_pesquisa = :id_pesquisa");
$sql->bindValue(":id_pesquisa",$id_pesquisa);
$sql->execute();

if($sql->rowCount() == 0){

    header("Location: menu.php");

}else{


    $nome = filter_input(INPUT_POST,'nome');
    
    
    if(!isset($id_pesquisa)){
    
        // MENSAGEM AQUI POR FAVOR CARO SENHOR BONDOSO 
        header("Location: index.php");
    }else{
    
        $sql = $pdo->prepare("INSERT INTO entrevistado (nome , id_pesquisa) VALUES (:nome , :id_pesquisa)");
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":id_pesquisa",$id_pesquisa);
        $sql->execute();
    
        $sql = $pdo->query("SELECT LAST_INSERT_ID()");
        
        $lista = [];
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($lista as $row_id){
            $id_entrevistado = $row_id['LAST_INSERT_ID()'];
        }
        
        header("Location: entrevista.php?id=".$id_entrevistado);
    
    }



}




