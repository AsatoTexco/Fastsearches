<?php
session_start();
ob_start();
require 'config.php';

if(!isset($_SESSION['idP'])){

    header("Location: index.php");

}

// =================================================




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="icon" type="image/png" href="icon.png"/>
<style>

*{
    padding: 0;
    margin: 0;
    font-family:   'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
body{

    background-color: rgb(25, 25, 25);
    /* width: 100vw; */
    height: 100vh;

}
/* h1{
    color: white;
} */
p{
    color: rgb(208, 208, 208);
}
/* ========= PERSONALIZAÇÃO ABOUT ============= */
.area_pesquisa{
    
    margin-top: 20px;
    /* width: 9%; */
    
    background-color: rgb(41, 41, 41);
    border: 3px solid blue;
    border-radius: 15px;
    

}
.about{
    
    width: 100%;
    height: 100%;
    
}
.content{

    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    
    /* pointer-events: none; */
    
}
.area_titulo{
    padding: 15px;
    height: 25%;
    width: 100%;
    display: flex;
    align-items: center; 
}
.titulo{

    color: white;

}
.area_paragrafo{

    padding: 15px   ;
    height: 45%;
    width: 100%;
    display: flex;
    /* align-items: center; */
     
}
/* =========== FIM personalização about  ========= */

.area_bot{

    width: 100%;
    height: 30%;
    padding-bottom: 15px;

}
.btns{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.option{

    border: 1.5px solid blue;
    border-radius: 15px;
    padding: 10px;
    text-decoration: none;
    color: white;
    cursor: pointer;

}
.area_btn_criar{

    width: 100%;
    display: flex;
    justify-content: end;
    align-items: center;

}
.btn_criar{

    font-size: 20px;
    padding: 10px;
    border-radius: 15px;
    border: 3px solid blue;
    cursor: pointer;
    text-decoration: none;
    color: black;
    background-color: white;

}
.pesquisas{

    display: flex;
    align-items: center;
    justify-content: center;

}
.area_msg_welcome{

    
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 150px;

}
.msg_welcome{

    color: white;
    text-align: center;

}
a{
    text-decoration: none;
}
.geral_pesquisas{

    min-width: 600px;

}

@media (max-width: 600px) {
    
    p{
    word-wrap: break-word;
    max-width: 300px;
    }
    .geral_pesquisas{

        min-width: 0;

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

}
.area_pesquisa:last-child{

    margin-bottom: 60px;

}
</style>

</head>
<body>

<a class="sair" href="sair.php">Sair</a>
<div class="topo">

    <a href="menu.php"><img class="logo"  src="logo.png"></a>
</div>


<div class="area_msg_welcome">

<!-- substituir por variavel php braba  -->
    <h1 class="msg_welcome">Seja bem vindo Sr. <?=ucfirst(strtolower($_SESSION['nomeP']))?>  </h1>
</div>

<div class="pesquisas"> 

    <div class="geral_pesquisas">


    
        <div class="area_btn_criar">

            <a href="criar_pesquisa.php" class="btn_criar">Criar Pesquisa</a>

        </div>



        <?php

            $sql = $pdo->prepare("SELECT * FROM pesquisa WHERE id_user = :id");
            $sql->bindValue(":id",$_SESSION['idP']);
            $sql->execute();

            $lista = [];
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($lista as $row_dados){


                $pesquisa = "<div class='area_pesquisa'>
                                <div class='about'>
                                <a href='responder.php?id=".$row_dados['id']."'>
                                    <div class='content'>

                                        
                                        <div class='area_titulo'>
                                                
                                            <h1 class='titulo'>".$row_dados['nome']."</h1>
    
                                        </div>
                                        <div class='area_paragrafo'>
    
                                            <p>".$row_dados['descricao']."</p>
    
                                        </div>

                                        </a>
                                        <div class='area_bot'>
                                            <div class='btns'>
    
                                                <a href='remover_action.php?id=".$row_dados['id']."' class='option remover'><p>Remover</p> </a>
                                                <a href='perguntas.php?id=".$row_dados['id']."' class='option editar'><p>Perguntas</p> </a>
                                                <a href='resultados.php?id=".$row_dados['id']."' class='option estatisticas'><p>Resultados</p> </a>
                            
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>";

                echo($pesquisa);

            }
            


        ?>

        <!-- <div class="area_pesquisa">
            <div class="about">
                <div class="content">


                    <div class="area_titulo">

                        <h1 class="titulo">Teste titulo mediamente grande</h1>

                    </div>

                    <div class="area_paragrafo">

                        <p>Pesquisa de satisfação e consumação do consumidor Pesquisa de satisfação e consumação do consumidor</p>

                    </div>

                    <div class="area_bot">

                        <div class="btns">

                            <a href="#" class="option remover"><p>Remover</p> </a>
                            <a href="#" class="option editar"><p>Editar</p> </a>
                            <a href="#" class="option estatisticas"><p>Estatísticas</p> </a>
                        
                        </div>

                    </div>
                </div>
            </div>
        </div> -->

      
       


        

      


    </div>
</div>




<script src="../js/clipboard.js"></script>
<script src="../js/sweetalert2.js"></script>
<script src="../js/custom.js"></script>

<?php

if(isset($_SESSION['login'])){

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
        title: 'Logado com Sucesso!'
    })</script>");

    unset($_SESSION['login']);

}

if(isset($_SESSION['msgP'])){
    
    if($_SESSION['msgP'] == True){


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
            title: 'Pesquisa Criada com Sucesso!'
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
            title: 'Você só pode criar 5 pesquisas!'
        })</script>");


    }

    unset($_SESSION['msgP']);

}


if(isset($_SESSION['msgP_removerP'])){

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
        title: 'Pesquisa removida com Sucesso!'
    })</script>");

    unset($_SESSION['msgP_removerP']);

}

?>

</body>
</html>