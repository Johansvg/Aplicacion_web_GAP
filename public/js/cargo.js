const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    descripcion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
}

let boton = document.getElementById('boton_crear_cargo');
let nombre_error = document.getElementById('nombre_error');
let descripcion_error = document.getElementById('descripcion_error');
nombre_error.style.display = 'none';
descripcion_error.style.display = 'none';
boton.disabled = true;

function validarCampos(){
    let nombre = document.getElementById('nombre_cargo');
    let descripcion = document.getElementById('descripcion_cargo');
    let boton = document.getElementById('boton_crear_cargo');
    if(expresiones.nombre.test(nombre.value) && expresiones.descripcion.test(descripcion.value)){
        boton.disabled = false;
    }else{
        boton.disabled = true;
    }
}

function limpiarCampos(){
    let nombre = document.getElementById('nombre_cargo');
    let descripcion = document.getElementById('descripcion_cargo');
    let boton = document.getElementById('boton_crear_cargo');
    nombre.value = '';
    descripcion.value = '';
    boton.disabled = true;
}

function validarNombre(){
    let nombre = document.getElementById('nombre_cargo');
    if(expresiones.nombre.test(nombre.value)){
        nombre_error.style.display = 'none';
        label_nombre.style.color = 'teal';
        nombre.style.borderBlockEnd = '1px solid teal';
    }else{
        nombre_error.style.display = 'block';
        label_nombre.style.color = 'red';
        nombre.style.borderBlockEnd = '1px solid red';
    }
    validarCampos();
}

function validarDescripcion(){
    let descripcion = document.getElementById('descripcion_cargo');
    if(expresiones.descripcion.test(descripcion.value)){
        descripcion_error.style.display = 'none';
        label_descripcion.style.color = 'teal';
        descripcion.style.borderBlockEnd = '1px solid teal';
    }else{
        descripcion_error.style.display = 'block';
        label_descripcion.style.color = 'red';
        descripcion.style.borderBlockEnd = '1px solid red';
    }
    validarCampos();
}