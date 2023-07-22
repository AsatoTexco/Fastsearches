
const enviar = document.getElementById("form_msg");
const formLogin = document.getElementById("form_login");

var nome = document.getElementById('nome');
var mensagem = document.getElementById('mensagem');



// Mensagem enviada com sucesso:
if(enviar){

  enviar.addEventListener("submit", async (e) =>{

    e.preventDefault(); 
    const dados = new FormData(enviar);
    const id = document.getElementById('id_value').value;
    const dados_php = await fetch("enviar.php?id="+id,{
    

      method: "POST",
      body: dados

    })
    const resposta = await dados_php.json();
    console.log(enviar);
    
    
    if(resposta['status']){
      
      Swal.fire({
        icon: 'success',
        title: 'Boaaa!',
        text: 'Sua mensagem foi enviada com sucesso!',
        
      })

      nome.value ="";
      mensagem.value = "";

    }else{

      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Houve um probleminha ao enviar sua mensagem...',
        
      })
    } 
  })
}

// if(formLogin){

//   formLogin.addEventListener("submit", async (e) =>{

//     e.preventDefault();
//     const dadosLogin = new FormData(formLogin);

//     const dadosLogin_php =  await fetch("login_action.php",{

//       method: "POST",
//       body: dadosLogin

//     })
//     console.log(dadosLogin_php);


//   })

// }