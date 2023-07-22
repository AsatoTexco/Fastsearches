const qnt_row = document.getElementById("qnt_row").value;

// receber dados cada formulario 

var form1 = document.getElementById('f1')
var form2 = document.getElementById('f2')
var form3 = document.getElementById('f3')
var form4 = document.getElementById('f4')
var form5 = document.getElementById('f5')
var form6 = document.getElementById('f6')
var form7 = document.getElementById('f7')
var form8 = document.getElementById('f8')
var form9 = document.getElementById('f9')
var form10 = document.getElementById('f10')

// console.log(form1)
// console.log(form5)
// console.log(form10)



// alert(qnt_row);

function remove(valor)   {
    
    document.getElementById("p"+valor).style.display = "none";
    document.getElementById("p"+(valor+1)).style.display = "block";
    var btn_s = document.getElementById("btn_sim");

    
    
}

var btn_s1 = document.getElementById("btn_sim1");
var btn_s2 = document.getElementById("btn_sim2");
var btn_s3 = document.getElementById("btn_sim3");
var btn_s4 = document.getElementById("btn_sim4");
var btn_s5 = document.getElementById("btn_sim5");
var btn_s6 = document.getElementById("btn_sim6");
var btn_s7 = document.getElementById("btn_sim7");
var btn_s8 = document.getElementById("btn_sim8");
var btn_s9 = document.getElementById("btn_sim9");
var btn_s10 = document.getElementById("btn_sim10");


//  ====================================   SIM   ==============================================

// ==========   1   ===========


    btn_s1.addEventListener("click", async (e) =>{
        
        const dados = new FormData(f1);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 1){
            window.location.href = "menu.php";
        }
    
    })


// ==========   2   ===========
if(btn_s2 !== null){


    btn_s2.addEventListener("click", async (e) =>{
        
        const dados = new FormData(f2);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 2){
            window.location.href = "menu.php";
        }
    
    })


}

// ==========   3   ===========
if(btn_s3 !== null){


    btn_s3.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f3);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 3){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   4   ===========
if(btn_s4 !== null){


    btn_s4.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f4);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 4){
            window.location.href = "menu.php";
        }
    // 
    })

}

// ==========   5   ===========
if(btn_s5 !== null){


    btn_s5.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f5);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 5){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   6   ===========
if(btn_s6 !== null){


    btn_s6.addEventListener("click", async (e) =>{

        const dados = new FormData(f6);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 6){
            window.location.href = "menu.php";
        }
    
    })

}


// ==========   7   ===========

if(btn_s7 !== null){



    btn_s7.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f7);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 7){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   8   ===========
if(btn_s8 !== null){


    btn_s8.addEventListener("click", async (e) =>{

        const dados = new FormData(f8);
        e.preventDefault(); 

        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {

            method: 'POST',
            body: dados
        } )

        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 8){
            window.location.href = "menu.php";
        }

    })


}


// ==========   9   ===========

if(btn_s9 !== null){


    btn_s9.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f9);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 9){
            window.location.href = "menu.php";
        }
    
    })


}

// ==========   10   ===========
if(btn_s10 !== null){



    btn_s10.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f10);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+1, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        window.location.href = "menu.php";
    
    })


}

// ======================================= NAO ========================================

var btn_n1 = document.getElementById("btn_nao1");
var btn_n2 = document.getElementById("btn_nao2");
var btn_n3 = document.getElementById("btn_nao3");
var btn_n4 = document.getElementById("btn_nao4");
var btn_n5 = document.getElementById("btn_nao5");
var btn_n6 = document.getElementById("btn_nao6");
var btn_n7 = document.getElementById("btn_nao7");
var btn_n8 = document.getElementById("btn_nao8");
var btn_n9 = document.getElementById("btn_nao9");
var btn_n10 = document.getElementById("btn_nao10");


// ==========   1   ===========

btn_n1.addEventListener("click", async (e) =>{

    const dados = new FormData(f1);
    e.preventDefault(); 

    const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {

        method: 'POST',
        body: dados
    } )

    const resposta = await dados_php.json();
    // alert("id_return "+resposta)
    if(qnt_row == 1){
        window.location.href = "menu.php";
    }

})

// ==========   2   ===========
if(btn_n2 !== null){


    btn_n2.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f2);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 2){
            window.location.href = "menu.php";
        }
    
    })


}

// ==========   3   ===========

if(btn_n3 !== null){

    btn_n3.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f3);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 3){
            window.location.href = "menu.php";
        }
    
    })


}

// ==========   4   ===========
if(btn_n4 !== null){


    btn_n4.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f4);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 4){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   5   ===========


if(btn_n5 !== null){


    btn_n5.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f5);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 5){
            window.location.href = "menu.php";
        }
    
    })


}

// ==========   6   ===========
if(btn_n6 !== null){



    btn_n6.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f6);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 6){
            window.location.href = "menu.php";
        }
    
    })


}

// ==========   7   ===========
if(btn_n7 !== null){


    btn_n7.addEventListener("click", async (e) =>{

        const dados = new FormData(f7);
        e.preventDefault(); 

        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {

            method: 'POST',
            body: dados
        } )

        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 7){
            window.location.href = "menu.php";
        }

    })

}


// ==========   8   ===========

if(btn_n8 !== null){


    
    btn_n8.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f8);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 8){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   9   ===========
if(btn_n9 !== null){



    btn_n9.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f9);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 9){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   10   ===========
if(btn_n10 !== null){

    btn_n10.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f10);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+3, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
    
        // MENSAGEM 
    
        window.location.href = "menu.php";
        
    
    })


}


var btn_m1 = document.getElementById("btn_meioT1");
var btn_m2 = document.getElementById("btn_meioT2");
var btn_m3 = document.getElementById("btn_meioT3");
var btn_m4 = document.getElementById("btn_meioT4");
var btn_m5 = document.getElementById("btn_meioT5");
var btn_m6 = document.getElementById("btn_meioT6");
var btn_m7 = document.getElementById("btn_meioT7");
var btn_m8 = document.getElementById("btn_meioT8");
var btn_m9 = document.getElementById("btn_meioT9");
var btn_m10 = document.getElementById("btn_meioT10");


// ==========   1   ===========

btn_m1.addEventListener("click", async (e) =>{

    const dados = new FormData(f1);
    e.preventDefault(); 

    const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {

        method: 'POST',
        body: dados
    } )

    const resposta = await dados_php.json();
    // alert("id_return "+resposta)
    if(qnt_row == 1){
        window.location.href = "menu.php";
    }

})

// ==========   2   ===========
if(btn_m2 !== null){


    btn_m2.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f2);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 2){
            window.location.href = "menu.php";
        }
    
    })

}

// ==========   3   ===========
if(btn_m3 !== null){


    btn_m3.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f3);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 3){
            window.location.href = "menu.php";
        }
    
    })
    
}

// ==========   4   ===========

if(btn_m4 !== null){


    btn_m4.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f4);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 4){
            window.location.href = "menu.php";
        }
    
    })
    
}

// ==========   5   ===========
if(btn_m5 !== null){


    btn_m5.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f5);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 5){
            window.location.href = "menu.php";
        }
    
    })
    
}

// ==========   6   ===========
if(btn_m6 !== null){

    btn_m6.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f6);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 6){
            window.location.href = "menu.php";
        }
    
    })

    
}

// ==========   7   ===========
if(btn_m7 !== null){

    btn_m7.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f7);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 7){
            window.location.href = "menu.php";
        }
    
    })

    
}

// ==========   8   ===========
if(btn_m8 !== null){

    btn_m8.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f8);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 8){
            window.location.href = "menu.php";
        }
    
    })

    
}

// ==========   9   ===========
if(btn_m9 !== null){

    btn_m9.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f9);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        if(qnt_row == 9){
            window.location.href = "menu.php";
        }
    
    })

    
}

// ==========   10   ===========
if(btn_m10 !== null){


    btn_m10.addEventListener("click", async (e) =>{
    
        const dados = new FormData(f10);
        e.preventDefault(); 
    
        const dados_php = await fetch("pesquisa/../cadastrar_resposta.php?resp="+2, {
    
            method: 'POST',
            body: dados
        } )
    
        const resposta = await dados_php.json();
        // alert("id_return "+resposta)
        window.location.href = "menu.php";
    
    })
    
}