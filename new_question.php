<?php

session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}


$id_pesquisa = filter_input(INPUT_GET,"id");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Pergunta</title>
    <link rel="icon" type="image/png" href="icon.png"/>

<style>
    *{

padding: 0;
margin: 0;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;


}
body{

    background-color: rgb(25, 25, 25);
    width: 100vw;
    height: 100vh;


}
a{

    text-decoration: none;

}
.form_area{

    
    width: 350px;
    height: 300px;
    background-color: rgb(41, 41, 41);
    border-radius: 15px;
    display: flex;
   
    justify-content: center;
    
}


/* inputs =============  */
.area_input{

width: 100%;
display: flex; 
align-items: center; 
justify-content: center; 
margin-top: 50px;
position: relative;


}
.input{

width: 80%;
background-color: rgb(41, 41, 41);
border: none;
outline : none;
font-size: 20px;
color: rgb(115, 115, 115);   



}

.label{

transition: .2s linear;
position: absolute;

top: 0px;
pointer-events: none;
color: rgb(135, 135, 135);
font-size: 18px;
left: 35px;

background-color: rgb(41, 41, 41);

}

.input:focus ~ .label, .input:valid ~ .label  {

top: -35px;
color: rgb(255, 255, 255);

}
.line{

width: 80%;
height: 2px;
background-color: rgb(255, 255, 255);
top: 25px;
position:absolute;

}
/* ===========  fim input  =========== */


.content{

    width: 100%;

}
.area_titulo{

    height: 20%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.titulo{

    font-size: 40px;
    color: blue;
}
.container_area_input{

    margin-top: 50px;
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

}


.area_btn{

   
width: 100%;
height: 100%;
display: flex;
align-items: center;
justify-content: center;
margin-top: 70px;

}

.btn_sub{

width: 150px;
height: 50px;
background-color: blue;
border-radius: 15px;
border: none;
outline: none;
color: white;
font-size: 16px;
cursor: pointer;

 

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

width: 100%;

margin-top: 50px;
display: flex;
align-items: center;
justify-content: center;

}
</style>
</head>
<body>



<a class="sair" href="sair.php">Sair</a>
<div class="topo">

    <a href="menu.php"><img class="logo"  src="logo.png"></a>
</div>   

<div class="area_geral">



<form class="form_area" action="new_question_action.php" method="POST">


    <input style="display: none"  name="id" value="<?=$id_pesquisa?>">
    <div class="content">

        <div class="area_titulo">

            <h1 class="titulo">Nova Pergunta</h1>

    </div>

    <div class="container_area_input">

        <div class="area_input iemail">
                        
                        <input name="pergunta" maxlength="100" required="" class="input">
                        <label class="label">Sua pergunta</label>
                        <div class="line"></div>
                        
            </div>

            

            

           
            <div class="area_btn">
                <input type="submit" class="btn_sub" value=Criar>
            </div>



    </div>

        

    </div>

</form>


</div>



</body>
</html>