var count = 0;
const textoCopia = ["Copiado","Cópia dupla!","Cópia tripla!","Dominação","Cópia desenfreada!","Mega cópia!","Inexorável!","Loucura pura","Cópia MONSTRA!","DIVINA!","SUPERDIVINA!!!"]
function copiarTexto() {
    
    if(count == 11){
        count = 0;
    }
    
        let textoCopiado = document.getElementById("link");
        textoCopiado.select();
        document.execCommand("copy");


        const Toast = Swal.mixin({
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
            title: textoCopia[count]
        })
        count += 1;           
    }


function removerPesquisa(){

    const Toast = Swal.mixin({
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
        title: 'Pesquisa Removida com sucesso!'
    })



}
