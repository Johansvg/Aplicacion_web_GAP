const expreciones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    precio: /^\d{1,14}(\.\d{1,2})?$/, // 7 a 14 numeros.
    descripcion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    texto: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
}

let boton = document.getElementById('boton_crear_servicio');
let nombre_error = document.getElementById('nombre_error');
let descripcion_error = document.getElementById('descripcion_error');
let precio_error = document.getElementById('precio_error');
let tiempo_error = document.getElementById('tiempo_error');
nombre_error.style.display = 'none';
descripcion_error.style.display = 'none';
precio_error.style.display = 'none';
tiempo_error.style.display = 'none';
boton.disabled = true;

function validarCampos(){
    let nombre = document.getElementById('nombre_servicio');
    let descripcion = document.getElementById('descripcion_servicio');
    let precio = document.getElementById('precio_servicio');
    let tiempo = document.getElementById('tiempo_servicio');
    let boton = document.getElementById('boton_crear_servicio');
    if(expreciones.nombre.test(nombre.value) && expreciones.descripcion.test(descripcion.value) && expreciones.precio.test(precio.value) && expreciones.tiempo.test(tiempo.value)){
        boton.disabled = false;
    }else{
        boton.disabled = true;
    }
}

function limpiarCampos(){
    let nombre = document.getElementById('nombre_servicio');
    let descripcion = document.getElementById('descripcion_servicio');
    let precio = document.getElementById('precio_servicio');
    let tiempo = document.getElementById('tiempo_servicio');
    let boton = document.getElementById('boton_crear_servicio');
    nombre.value = '';
    descripcion.value = '';
    precio.value = '';
    tiempo.value = '';
    boton.disabled = true;
}

function validarNombre(){
    let nombre = document.getElementById('nombre_servicio');
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
    let descripcion = document.getElementById('descripcion_servicio');
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
    let precio = document.getElementById('precio_servicio');
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

function validarTiempo(){
    let tiempo = document.getElementById('tiempo_servicio');
    if(expreciones.texto.test(tiempo.value)){
        tiempo_error.style.display = 'none';
        label_tiempo.style.color = 'teal';
        tiempo.style.borderBlockEnd = '1px solid teal';
    }else{
        tiempo_error.style.display = 'block';
        label_tiempo.style.color = 'red';
        tiempo.style.borderBlockEnd = '1px solid red';
    }
    validarCampos();
}

