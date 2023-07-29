<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    display: flex;
    align-items: center;
    justify-content: center;

}
/* h1{
    color: white;
} */
p{
    color: rgb(208, 208, 208);
}
/* ========= PERSONALIZAÇÃO ABOUT ============= */
.area_pesquisa{
    
    width: 90%;
    height: 200px;
    background-color: rgb(41, 41, 41);
    border: 3px solid blue;
    border-radius: 15px;
    padding: 15px;

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
    pointer-events: none;
    
}
.area_titulo{
    padding: 15px;
    height: 50%;
    width: 100%;
    display: flex;
    align-items: center; 
}
.titulo{

    color: white;

}
.area_paragrafo{

    padding: 15px;
    height: 50%;
    width: 100%;
    display: flex;
    /* align-items: center; */
     
}
/* =========== FIM personalização about  ========= */


/* =========== OVERLAY ========== */

.overlay{
    
    display: none;


    height: 100%;
    width: 100%;
    

}
.content_overlay{
    
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;


}

.option{
    border-radius: 15px;
    
    height: 90%;
    width: 25%;
    text-decoration: none;
    color: white;
    
    display: flex;
    align-items: center;
    justify-content: center;
    

}
/* =========== FIM OVERLAY ========== */
.about:hover ~ .overlay, .about:active ~ .overlay{

    display: block;

}

.about:hover, .about:active{

display: none;

}
.remover{

    border: 0.5px solid red;
    color: red;
}
.editar{

border: 0.5px solid blue;
color: blue;
}
.estatisticas{

border: 0.5px solid green;
color: green;
}


</style>

</head>
<body>

<div class="area_pesquisa">

    <div class="about">

        <div class="content">
            <div class="area_titulo">

                <h1 class="titulo">Teste titulo mediamente grande</h1>

            </div>

            <div class="area_paragrafo">

                <p>Teste descrição que tem que ser mais grande pra averiguar se esta funcional msm ou se é apenas meme</p>

            </div>

        </div>


    </div>



    <div class="overlay">

        <div class="content_overlay">

            <a href="#" class="option remover"><h1>Remover</h1> </a>
            <a href="#" class="option editar"><h1>Editar</h1> </a>
            <a href="#" class="option estatisticas"><h1>Estatísticas</h1> </a>

        </div>

    </div>

</div>



</body>
</html>