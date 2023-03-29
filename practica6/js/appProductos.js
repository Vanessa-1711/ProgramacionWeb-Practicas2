//Se obtiene la referencia al boton que muestra el modal
var btnMostrarModal = document.getElementById('botonEnviar');

// Obtener una los div de los input
var divNombre = document.getElementById('nombrediv');
var divCategoria = document.getElementById('categoriadiv');
var divPrecioVe = document.getElementById('precioVediv');
var divPrecioCom = document.getElementById('precioCompradiv');
var formulario= document.getElementById('form1');

// Se agregan con un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
    var nombre=document.form1.nombre.value;
    var categoria=document.form1.categoria.value;
    var precioVen=document.form1.precioven.value;
    var preciocom=document.form1.precioComp.value;

    //validaciones
    if( nombre == "" || categoria ==""){
        divNombre.classList.add('was-validated');
        divCategoria.classList.add('was-validated');
        return false;
        }
    //validaciones
    if(precioVen==""){
        divPrecioVe.classList.add('was-validated');
        return false;
    } 
    //validaciones
    if (preciocom==""){
        divPrecioCom.classList.add('was-validated');
        return false;
    }

    //reiniciar formulario
    divNombre.classList.remove('was-validated');
    divCategoria.classList.remove('was-validated');
    divPrecioVe.classList.remove('was-validated');
    divPrecioCom.classList.remove('was-validated');
    //formulario.codigo.value=formulario.nombre.value=formulario.categoria.value=formulario.precioVen.value=formulario.preciocom.value='';
    });
