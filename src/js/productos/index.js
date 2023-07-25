const formulario = document.querySelector('form')

const guardar = async (evento) => {
    evento.preventDefault();

    if (!validarFormulario(formulario,['producto_id'])){
        alert('Debe llenar todos los campos');
        return;
    }

    const body = new FormData(formulario)
    body.append('tipo', 1)
    body.delete('producto_id')
    const url ='/CRUD_JS/CRUD_JS_REYES/controladores/productos/index.php';
    const config = {
        method : 'POST',
        body
    }

    try{
        const respuesta = await fetch(url,config)
        const data = await respuesta.json();

        const {codigo, mensaje, detalle} = data;

        switch (codigo) {
            case 1:
                formulario.reset();
                
                break;

        case 0:
                console.log(detalle);
                
                break;
            default:
                break;
        }

    alert(mensaje);


        console.log(data);
    }catch (error){
        console.log(error)
    }
}

formulario.addEventListener('submit', guardar)




