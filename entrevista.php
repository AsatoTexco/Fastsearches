<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

// =================================================

$id_entrevistado = filter_input(INPUT_GET,"id");





// recebendo dados do entrevistado e em qual pesquisa ele está

$sql = $pdo->prepare("SELECT * FROM entrevistado WHERE id = :id_entrevistado");
$sql->bindValue(":id_entrevistado",$id_entrevistado);
$sql->execute();

$lDados = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($lDados as $row_entrevistado){

    $nome = $row_entrevistado['nome'];
    $id_pesquisa = $row_entrevistado['id_pesquisa'];

}

$sql = $pdo->prepare("SELECT * FROM pergunta WHERE id_pesquisa = :id_pesquisa");
$sql->bindValue(":id_pesquisa",$id_pesquisa);
$sql->execute();



$lDados_pergunta = $sql->fetchAll(PDO::FETCH_ASSOC);


foreach($lDados_pergunta as $row_dados_pergunta){


    $pergunta = $row_dados_pergunta['nome'];
    $id_pergunta = $row_dados_pergunta['id'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrevista</title>
    <link rel="icon" type="image/png" href="icon.png"/>

<style>

*{
    padding: 0;
    margin: 0;
    color: white;
    font-family:   'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}   
body{

    background-color: rgb(25, 25, 25);
    /* width: 100vw; */
    height: 100vh;

}   
.container_geral{

    width: 100vw;
    /* height: 100vh; */
    display: flex;
    margin: 0 auto;
    background-color: rgb(25, 25, 25);

    align-items: center;
    justify-content: center; 
       
  
    flex-direction: column;

}
.area_pergunta{

    width: 60%;
    border: 3px solid blue;
    border-radius: 15px;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

}

@media (max-width: 600px) {
    .area_pergunta{

        width: 90%;

    }
}
.cotent_pergunta{

    width: 100%;
    height: 100%;

}
.tit_pergunta{
    color: white;
    text-align: center;
    font-size: 25px;
}
.respostas{

    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;


}
.btn_resp{

    margin-top: 35px;
    padding: 10px;
    border: none;
    width: 30%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    text-align: center;
    color: white;
    text-decoration: none;


}
.sim{

    background-color: green;
    
}
.nao{

    background-color: red;

}
.meioT{

    background-color: blue;

}
.area_pergunta{

    position: absolute;
    background-color: rgb(25, 25, 25);
    display: none;

}
#p1{

    display: block;

}

.logo{

width: 164px;

}


.topo{

width: 100%;
display: flex;
justify-content: center;
align-items: center;

}
.sair{

position: absolute;
top: 30px;
right: 20px;
 
text-align: center;
width: 50px;
padding: 10px;
background-color: red;
color: white;
border-radius: 15px;

}
.area_geral{

    margin-top: 200px;

}
</style>

</head>
<body>

<a class="sair" href="sair.php">Sair</a>
<div class="topo">

    <a href="menu.php"><img class="logo"  src="logo.png"></a>
</div>

<div class="area_geral">


    <div class="container_geral">

<?php

if($sql->rowCount() == 0){
    header("Location: menu.php");
}
if($sql->rowCount() == 1){
    $countRemove = 0;
}

if($sql->rowCount() == 2){
    $countRemove = 1;
}
if($sql->rowCount() == 3){
    $countRemove = 2;
}
if($sql->rowCount() == 4){
    $countRemove = 3;
}
if($sql->rowCount() == 5){
    $countRemove = 4;
}
if($sql->rowCount() == 6){
    $countRemove = 5;
}
if($sql->rowCount() == 7){
    $countRemove = 6;
}
if($sql->rowCount() == 8){
    $countRemove = 7;
}
if($sql->rowCount() == 9){
    $countRemove = 8;
}
if($sql->rowCount() == 10){
    $countRemove = 9;
}
foreach($lDados_pergunta as $row_dados_pergunta){


    $pergunta = $row_dados_pergunta['nome'];
    $id_pergunta = $row_dados_pergunta['id'];


    
    $idCount = $sql->rowCount() - $countRemove;
  
    

    $pergunta = '        <div class="area_pergunta" id="p'.$idCount.'">
                            <div class="cotent_pergunta">
                                <p class="tit_pergunta">'.$pergunta.'</p>
                            </div>
                            <div class="respostas">

                                <form id="f'.$idCount.'" method="POST" action="">
                                    <input id="id_pergunta" name="pergunta" style="display: none;" value="'.$id_pergunta.'">
                                    <input id="id_entrevistado" name="id_entrevistado" style="display: none;" value="'.$id_entrevistado.'">
                                </form>


                                <button class="btn_resp nao" id="btn_nao'.$idCount.'"  onclick="remove('.$idCount.')">Não</button>
                                <button class="btn_resp meioT" id="btn_meioT'.$idCount.'"  onclick="remove('.$idCount.')">Meio Termo</button>
                                <button class="btn_resp sim" id="btn_sim'.$idCount.'"  onclick="remove('.$idCount.')">Sim</button>

                            </div>
                        </div>';
                        

    echo($pergunta);
    $countRemove = $countRemove - 1 ;

}







?>

    <!-- <form id="f1" method="POST" action="">
        <input id="id_pergunta" style="display: none;" value="'.$id_pergunta.'">
    </form> -->

    <!-- qnt de linhas da pesquisa no banco de dados  -->
    <input id="qnt_row" style="display: none;" value="<?=$sql->rowCount()?>">

    <!-- id do entrevistado  -->
    <!-- <input id="id_entrevistado" style="display: none;" value="<?=$id_entrevistado?>"> -->
    

        <!-- <div class="area_pergunta" id="p1">
            <div class="cotent_pergunta">
                <p class="tit_pergunta">kandidid dikw dkwiod dowja dowjao downgw gjwodsjg owjfj dowmd iajwodoao odajgjk god odjkw dow owjd oowjg</p>
            </div>
            <div class="respostas">

                <input id="id_entrevistado" style="display: none;" value="<?=$id_pergunta?>">


                <a class="btn_resp nao" href="">Não</a>
                <a class="btn_resp meioT" href="">Meio Termo</a>
                <button class="btn_resp sim" id="btn_sim"  onclick="remove(1)">Sim</button>

            </div>
        </div>
         -->

        

    </div>
    
</div>

    

<script src="../js/main.js"></script>
</body>
</html>