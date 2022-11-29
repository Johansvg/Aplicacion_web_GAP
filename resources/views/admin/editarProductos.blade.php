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
                            <input id="nombre_producto" type="text" name="nombre_producto" value="{{ $productos->nombre_producto }}" class="validate" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                            <label id="label_nombre" for="nombre_producto">Nombre</label>
                            <p id="nombre_error" class="text-center red-text">Nombre invalido</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="descripcion_producto" type="text" name="descripcion_producto" value="{{ $productos->descripcion_producto }}" class="validate" onchange="validarDescripcion()" onkeypress="validarDescripcion()" onfocusout="validarDescripcion()">
                            <label id="label_descripcion" for="descripcion_producto">Descripción</label>
                            <p id="descripcion_error" class="text-center red-text">Descripción invalida</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="precio_producto" type="number" name="precio_producto" value="{{ $productos->precio_producto }}" class="validate" onchange="validarPrecio()" onkeypress="validarPrecio()" onfocusout="validarPrecio()">
                            <label id="label_precio" for="precio_producto">Precio</label>
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