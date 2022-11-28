<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar productos</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body id="fondoEditar">
    <div class="container" >
        <div class="row">
        </div>
        <div class="row center ">
            <div class="col s2"></div>
            <div class="col s8">
                <h4>Editar productos</h4>
                <div class="divider"></div>
                Ingrese todos los datos requeridos para editar un producto.
                <form action="{{ route('productos.update', $productos->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="nombre_producto" id="nombre_producto" value="{{ $productos->nombre_producto }}" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                            <label for="nombre_producto" id="label_nombre">Nombre</label>
                            <p id="nombre_error" class="text-center red-text">Nombre invalido</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="descripcion_producto" id="descripcion_producto" value="{{ $productos->descripcion_producto }}" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                            <label for="descripcion_producto" id="label_descripcion">Descripción</label>
                            <p id="descripcion_error" class="text-center red-text">Descripción invalida</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" name="precio_producto" id="precio_producto" value="{{ $productos->precio_producto }}" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                            <label for="precio_producto" id="label_precio">Precio</label>
                            <p id="precio_error" class="text-center red-text">Precio invalido</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect cyan lighten-3 black-text btn "><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('productos.index') }}" class="btn waves-effect black-text red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    {{-- Vincular js en carpeta resource --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/productos.js') }}"></script>
</body>
</html>