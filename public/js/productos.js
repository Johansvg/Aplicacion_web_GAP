const expreciones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    precio: /^\d{1,14}(\.\d{1,2})?$/, // 7 a 14 numeros.
    descripcion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
}

let boton = document.getElementById('boton_crear_producto');
let nombre_error = document.getElementById('nombre_error');
let descripcion_error = document.getElementById('descripcion_error');
let precio_error = document.getElementById('precio_error');
nombre_error.style.display = 'none';
descripcion_error.style.display = 'none';
precio_error.style.display = 'none';
boton.disabled = true;

function validarCampos(){
    let nombre = document.getElementById('nombre_producto');
    let descripcion = document.getElementById('descripcion_producto');
    let precio = document.getElementById('precio_producto');
    let boton = document.getElementById('boton_crear_producto');
    if(expreciones.nombre.test(nombre.value) && expreciones.descripcion.test(descripcion.value) && expreciones.precio.test(precio.value)){
        boton.disabled = false;
    }else{
        boton.disabled = true;
    }
}


function limpiarCampos(){
    let nombre = document.getElementById('nombre_producto');
    let descripcion = document.getElementById('descripcion_producto');
    let precio = document.getElementById('precio_producto');
    nombre.value = '';
    descripcion.value = '';
    precio.value = '';
    boton.disabled = true;
}

function validarNombre(){
    let nombre = document.getElementById('nombre_producto');
    let nombre_error = document.getElementById('nombre_error');
    let label_nombre = document.getElementById('label_nombre');
    if(expreciones.nombre.test(nombre.value)){
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
    let descripcion = document.getElementById('descripcion_producto');
    let descripcion_error = document.getElementById('descripcion_error');
    let label_descripcion = document.getElementById('label_descripcion');
    if(expreciones.descripcion.test(descripcion.value)){
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

function validarPrecio(){
    let precio = document.getElementById('precio_producto');
    let precio_error = document.getElementById('precio_error');
    let label_precio = document.getElementById('label_precio');
    if(expreciones.precio.test(precio.value)){
        precio_error.style.display = 'none';
        label_precio.style.color = 'teal';
        precio.style.borderBlockEnd = '1px solid teal';
    }else{
        precio_error.style.display = 'block';
        label_precio.style.color = 'red';
        precio.style.borderBlockEnd = '1px solid red';
    }
    validarCampos();
}