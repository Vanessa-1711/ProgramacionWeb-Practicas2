//obtener una referencia al boton que muestra el modal
var btnMostrarModal = document.getElementById('botonEnviar');



// Obtener una los div de los input
var divnombre = document.getElementById('nombrediv');
var formulario= document.getElementById('form1');

// Se agregan con un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
    var nombre=document.form1.nombreCategoria.value;
    // validacion

    if(nombre=="" ){
        divnombre.classList.add('was-validated');
        return false;
    }

    //reiniciar formulario
    divNombre.classList.remove('was-validated');
    //formulario.nombre.value=formulario.clave.value='';
    });
