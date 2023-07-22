<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

$id = filter_input(INPUT_GET,"id");
if(!isset($id)){

    header("Location: menu.php");
}


$sql = $pdo->prepare("SELECT * FROM pesquisa WHERE id = :id_pesquisa");
$sql->bindValue(":id_pesquisa",$id);
$sql->execute();

$lPesquisa = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach($lPesquisa as $row_pesquisa){

    $id_user = $row_pesquisa['id_user'];

}
if($id_user !== $_SESSION['idP']){

    header("Location: menu.php");

}

// =================================================
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="icon" type="image/png" href="icon.png"/>

<style>

*{
    padding: 0;
    margin: 0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    
}
body{

    background-color: rgb(25, 25, 25);
    /* width: 100vw; */
    height: 100vh;

}

.geral_perguntas{
    margin-top: 50px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}   
.area_btn_new{

    /* media query ira mudar isso aqui    */
    width: 60%;
    display: flex;
    align-items: center;
    justify-content: end;

}
.btn_new{

    padding: 10px;
    border: 3px solid blue;
    border-radius: 15px;
    text-decoration: none;
    background-color: white;
    color: black;

}
.container_perguntas{

    /* vai ter q  mudar isso aqui tbm    */
    width: 60%;
    display: flex;
    align-items: center;
    justify-items:center;

}

.area_pergunta{
    margin-top: 20px;
    padding: 15px;
    border: 3px solid blue;
    border-radius: 15px;
    width: 100%;

}
.content_pergunta{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.area_titulo_pergunta{

    width: 70%;
    height: 100%;
    display: flex;
    align-items: center;
     
    

}
.area_btn_remove{

    width: 30%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}
.btn_remove{

    padding: 10px;
    border-radius: 15px;
    border: 1px solid red;
    text-decoration: none;
    color: white;

}
h3{

    color: white;

}
h1{
    color: white;
}
@media (max-width: 600px) {

    .container_perguntas{

        width: 90%;
    }

    .area_btn_new{

        width: 90%;

    }
    
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
</style>
</head>
<body>


<a class="sair" href="sair.php">Sair</a>
<div class="topo">

    <a href="menu.php"><img class="logo"  src="logo.png"></a>
</div>


<div class="geral_perguntas">

    <h1>Perguntas</h1>

    <div class="area_btn_new">
        <a class="btn_new" href="new_question.php?id=<?=$id?>">Criar Pergunta</a>
    </div>

<?php 

$sql = $pdo->prepare("SELECT * FROM pergunta WHERE id_pesquisa = :id");
$sql->bindValue(":id",$id);
$sql->execute();

$lista = [];
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($lista as $row_dados){


    $pergunta = '    <div class="container_perguntas">
                        <div class="area_pergunta">
                            <div class="content_pergunta">
                                <div class="area_titulo_pergunta">
    
                                    <h3>'.$row_dados["nome"].'</h3>
                                </div>
    
                                <div class="area_btn_remove">
    
                                    <a class="btn_remove" href="remover_pergunta_action.php?id='.$row_dados['id'].'">Remover</a>
    
                                </div>
    
                            </div>
                        </div>
                    </div>';

    echo($pergunta);


}




?>





</div>

<script src="js/clipboard.js"></script>
<script src="js/sweetalert2.js"></script>
<script src="js/custom.js"></script>

<?php


if(isset($_SESSION['msgP_pergunta'])){
    
    if($_SESSION['msgP_pergunta'] == True){


        echo("<script>const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    
        Toast.fire({
            icon: 'success',
            title: 'Pergunta criada com Sucesso!'
        })</script>");


    }else{

        echo("<script>const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    
        Toast.fire({
            icon: 'error',
            title: 'Você só pode criar 10 Perguntas!'
        })</script>");


    }

    unset($_SESSION['msgP_pergunta']);

}
 

if(isset($_SESSION['msgP_removerPergunta '])){
    


    echo("<script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Pergunta removida com Sucesso!'
    })</script>");

    unset($_SESSION['msgP_removerPergunta ']);
}
?>


</body>
</html>