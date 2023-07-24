const formulario = document.querySelector('form')

const guardar = async (evento) => {
    evento.preventDefault();

    if (!validarFormulario(formulario)){
        alert('Debe llenar todos los campos');
        return;
    }

    const body = new FormData(formulario)
    const url ='/CRUD%20JS/CRUD_JS_REYES/controladores/productos/index.php';
    const config = {
        method : 'POST',
        body
    }

    try{
        const respuesta = await fetch(url,config)
        const data = await respuesta.text();

        console.log(data);
    }catch (error){
        console.log(error)
    }
}

formulario.addEventListener('submit', guardar)