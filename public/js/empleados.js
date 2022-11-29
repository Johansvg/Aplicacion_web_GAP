const expreciones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    telefono: /^\d{7,14}$/, // 7 a 14 numeros.
}

let boton = document.getElementById('boton_crear_empleado');
let nombre_error = document.getElementById('nombre_error');
let telefono_error = document.getElementById('telefono_error');
nombre_error.style.display = 'none';
telefono_error.style.display = 'none';
boton.disabled = true;

function validarCampos(){
    let nombre = document.getElementById('nombre_empleado');
    let telefono = document.getElementById('telefono_empleado');
    let boton = document.getElementById('boton_crear_empleado');
    if(expreciones.nombre.test(nombre.value) && expreciones.telefono.test(telefono.value)){
        boton.disabled = false;
    }else{
        boton.disabled = true;
    }
}

function limpiarCampos(){
    let nombre = document.getElementById('nombre_empleado');
    let telefono = document.getElementById('telefono_empleado');
    let boton = document.getElementById('boton_crear_empleado');
    nombre.value = '';
    telefono.value = '';
    boton.disabled = true;
}

function validarNombre(){
    let nombre = document.getElementById('nombre_empleado');
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

function validarTelefono(){
    let telefono = document.getElementById('telefono_empleado');
    if(expreciones.telefono.test(telefono.value)){
        telefono_error.style.display = 'none';
        label_telefono.style.color = 'teal';
        telefono.style.borderBlockEnd = '1px solid teal';
    }else{
        telefono_error.style.display = 'block';
        label_telefono.style.color = 'red';
        telefono.style.borderBlockEnd = '1px solid red';
    }
    validarCampos();
}