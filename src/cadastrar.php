<?php

require 'config.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="icon" type="image/png" href="icon.png"/>
<style>

*{
    padding: 0;
    margin: 0;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
body{

    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    background-color: rgb(0, 0, 0);

}

a{
    color: white;
}
.menu{

    
    background-color: rgb(41, 41, 41);
    border-radius: 15px;
    box-shadow: 2px 2px 2px 2px blue;

}

.content{

    width: 350px;
    height: 450px;
    padding: 15px;
    
    
}
.area_input{

    width: 100%;
     display: flex; 
     align-items: center; 
     justify-content: center; 
    margin-top: 50px;
    position: relative;


}
.iemail{

    margin-top: 10px;

}
/* input ============================= */
h1{

    text-align: center;
    color: blue;
    font-size: 40px;
    

}


.email{

    width: 80%;
    background-color: rgb(41, 41, 41);
    border: none;
    outline : none;
    font-size: 20px;
    color: rgb(115, 115, 115);   
    
    

}
.email::after{

    background-color: #ffffff;
    content: "";
    display: inline-block;
    height: 122px;
    position: relative;
    vertical-align: middle;
    width: 50%;

}


/* .email::after{
    content: "";
    position: absolute;
    color: white;
    background-color: white;
    width: 80%;
} */
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



.email:focus ~ .label, .email:valid ~ .label  {

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
.area_titulo{

    height: 30%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}
.container_input{

    height: 45%;
    width: 100%;
    display: flex;
    flex-direction: column;
     
    


}
.area_btn{

   
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 0px;

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
.links{

    bottom: 0;
    position: relative;
    left: 15px;

}
</style>

</head>
<body>

<form action="cadastrar_action.php" method="POST" class="menu">

   <div class="content">
        <div class="area_titulo">

            <h1>Cadastrar</h1>

        </div>

        <div class="container_input">

            <div class="content_inp">


                <div class="area_input iemail">
                    
                    <input name="nome" required="" class="email">
                    <label class="label">Nome</label>
                    <div class="line"></div>
                    
                </div>

            </div>
    
            <div class="content_inp">

                <div class="area_input">
                    
                    <input name="usuario" required="" class="email" >
                    <label class="label">Usuário</label>
                    <div class="line"></div>
                    
                </div>

            </div>
            
            <div class="content_inp">

                <div class="area_input">
                    
                    <input name="senha" type="password" required="" class="email" >
                    <label class="label">Senha</label>
                    <div class="line"></div>
                    
                </div>

            </div>

            <!-- <div class="content_inp">

                <div class="area_input">
                    
                    <input name="senha" type="password" required="" class="email" >
                    <label class="label" for="senha">Confirmar Senha    </label>
                    <div class="line"></div>
                    
                </div>

            </div> -->
            



        </div>

        <div class="area_btn">
            <input type="submit" class="btn_sub" value=Cadastrar>
        </div>
        <br>
        <div class="links">

            <!--             MUDAR PRA PHP    =========     -->
            <a href="index.php">Entrar</a>

        </div>


   </div>
      



</form>

    
</body>
</html>