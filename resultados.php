<?php

session_start();
ob_start();
require 'config.php';




$id_pesquisa = filter_input(INPUT_GET,'id');

if(!isset($id_pesquisa)){

    header("Location: menu.php");
    
}

$sql = $pdo->prepare("SELECT * FROM pesquisa WHERE id = :id_pesquisa");
$sql->bindValue("id_pesquisa",$id_pesquisa);
$sql->execute();

if($sql->rowCount() < 1){

    header("Location: menu.php");

}

$sql = $pdo->prepare("SELECT * FROM entrevistado WHERE id_pesquisa = :id_pesquisa");
$sql->bindValue(":id_pesquisa",$id_pesquisa);
$sql->execute();

$qnt_entrevistados = $sql->rowCount();

// NOME PESQUISA 
$sql = $pdo->prepare("SELECT * FROM pesquisa WHERE id = :id_pesquisa");
$sql->bindValue(":id_pesquisa",$id_pesquisa);
$sql->execute();

$lPesquisa = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach($lPesquisa as $row_pesquisa){

    $nome_pesquisa = $row_pesquisa['nome'];


}








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="icon" type="image/png" href="icon.png"/>

<style>

*{
    padding: 0;
    margin: 0;
    font-family:   'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: white;
}
body{

    background-color: rgb(25, 25, 25);
    /* width: 100vw; */
    height: 100vh;

}

.area{

    width:100%;
    
    flex-direction: column;
    display:flex;
    justify-content: center;
    align-items: center;

}

#area_grafico{

    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    /* background: conic-gradient(red 50%, green 0  75%, blue  0 100%); */
    transition: --p 2s ;
    animation: anime 3s ease-in-out 0s ;
    
}


.meio{

    height: 50%;
    width: 50%;
    border-radius: 100%;
    background-color: rgb(25, 25, 25);

}
.content_grafico{

    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;

}
.verde{
    width: 10px;
    height: 10px;
    background-color: green;
    border-radius: 5px;
}
.azul{
    width: 10px;
    height: 10px;
    background-color: blue;
    
    border-radius: 5px;
}
.vermelho{
    width: 10px;
    height: 10px;
    
    background-color: red;
    border-radius: 5px;
}
.container_legenda{

    height: 100%;

}

.bloco{

    display: flex;
    padding: 10px;
    width:165px;
    align-items: center;

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
text-decoration: none;

}

.geral{

display: grid;
place-items: center;
grid-template-columns: repeat(2,1fr);
gap: 20px;
justify-content: space-around;
width: 80%;

}
@media (max-width:600px) {

    .geral{

        grid-template-columns: repeat(1,1fr);

    }
    
}

.area_geral{

    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;

}
p{

text-align: center;

}
h1 , h2{

    text-align: center;
    margin-bottom: 20px;

}
.area_clipboard{

    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;
    flex-direction: column;

}
.clipboard input{

    background-color: black;
    outline: none;
    border: 2px solid blue;
    padding: 5px;
    border-radius: 10px;

}
.clipboard button{

    border-radius: 10px;
    color: black;
    border: 2px solid blue;
    padding: 5px;
    cursor: pointer;

}
 
</style>
</head>
<body>

<?php 


if(isset($_SESSION['idP'])){

    echo('<a class="sair" href="sair.php">Sair</a>');

}
 

?>
<div class="topo">

    <a href="menu.php"><img class="logo"  src="logo.png"></a>
</div>
<h1>Resultados</h1>
<h2><?=$nome_pesquisa?> - <?=$qnt_entrevistados?> Entrevistados</h2>
<div class="area_clipboard">
    <p class="tit_clip">Compartilhe o Resultado</p>
    <div class="clipboard">

        <input type="text" id="link" value="https://fastsearches.000webhostapp.com/resultados.php?id=<?=$id_pesquisa?>" readonly> 
        <button onclick="copiarTexto()">copiar</button>

    </div>

</div>

<div class="area_geral">


    <div class="geral">

<?php

$sql = $pdo->prepare("SELECT * FROM pergunta WHERE id_pesquisa = :id_pesquisa");
$sql->bindValue(":id_pesquisa",$id_pesquisa);
$sql->execute();

$lPerguntas = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($lPerguntas as $row_pergunta){


    $id_pergunta = $row_pergunta['id'];

    $sql = $pdo->prepare("SELECT * FROM resposta WHERE id_pergunta = :id_pergunta");
    $sql->bindValue(":id_pergunta",$id_pergunta);
    $sql->execute();

    // TOTAL DE RESPOSTAS
    $total_respostas = $sql->rowCount();
    if($total_respostas == 0){

        $total_respostas = 1;

    }

    $sql = $pdo->prepare("SELECT * FROM resposta WHERE id_pergunta = :id_pergunta AND resposta = 'S'");
    $sql->bindValue(":id_pergunta",$id_pergunta);
    $sql->execute();

    // RESPOSTAS SIM DA PERGUNTA
    $respostaPositivas = $sql->rowCount();
    

    $sql = $pdo->prepare("SELECT * FROM resposta WHERE id_pergunta = :id_pergunta AND resposta = 'N'");
    $sql->bindValue(":id_pergunta",$id_pergunta);
    $sql->execute();

    // RESPOSTAS NEGATIVAS DA PERGUNTA 
    $respostaNegativas = $sql->rowCount();
     

    $sql = $pdo->prepare("SELECT * FROM resposta WHERE id_pergunta = :id_pergunta AND resposta = 'M'");
    $sql->bindValue(":id_pergunta",$id_pergunta);
    $sql->execute();

    // RESPOSTAS MEIO TERMO DA PERGUNTA 
    $respostaMeioT = $sql->rowCount();
    

    $calc_respostaN = ($respostaNegativas * 360) / $total_respostas  ;

    $calc_respostaP = (($respostaPositivas * 360) / $total_respostas) + $calc_respostaN ;

    $calc_respostaM = (($respostaMeioT * 360) / $total_respostas)  ;

    
    $porcentP = (($calc_respostaP - $calc_respostaN) * 100) / 360;
    $porcentN = ($calc_respostaN * 100) / 360;
    $porcentM = ($calc_respostaM * 100) / 360;

     
    
    $pergunta = $row_pergunta['nome'];

    $grafico = '<div class="area">
                    <p>'.$pergunta.'</p>
                    <div class="content_grafico">
                        <div id="area_grafico" style="background: conic-gradient(red '.$calc_respostaN.'deg, green 0  '.$calc_respostaP.'deg, blue  0 100%);"><div class="meio"></div></div>
                        <div class="container_legenda">
                            <div class="bloco">
                                <div class="verde"></div><p>'.round($porcentP,1).'% - Sim</p>
                            </div>
                            <div class="bloco">
                                <div class="azul"></div><p> '.round($porcentM,1).'% - Meio Termo</p>
                            </div>
                            <div class="bloco">
                                <div class="vermelho"></div><p> '.round($porcentN,1).'% - Não</p>
                            </div>
                        </div>
                    </div>
                </div> ';

    echo($grafico);


}

?>
        <!-- <div class="area">
            <p>ja diow dona dow aofjd downga fowng downgkao  aodmwogjka goaodjdowngowoajg goaodjg fodwaj gogjwogjaogoaw goanfo</p>
            <div class="content_grafico">
                <div id="area_grafico" style="background: conic-gradient(red 30%, green 0  75%, blue  0 100%);"><div class="meio"></div></div>
                <div class="container_legenda">
                    <div class="bloco">
                        <div class="verde"></div><p> 50% - Sim</p>
                    </div>
                    <div class="bloco">
                        <div class="azul"></div><p> 25% - Meio Termo</p>
                    </div>
                    <div class="bloco">
                        <div class="vermelho"></div><p> 25% - Não</p>
                    </div>
                </div>
            </div>
        </div>  -->
    
        
    

    
    
    </div>
</div>



<script src="js/clipboard.js"></script>
<script src="js/sweetalert2.js"></script>
<script src="js/custom.js"></script>
</body>
</html>