@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row center">
        <div class="col s2"></div>
        <div class="col s8">
            <h4>Crear productos</h4>
            <div class="divider"></div>
            Ingrese todos los datos requeridos para crear un nuevo producto.
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombre_producto" type="text" name="nombre_producto" class="validate" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                        <label id="label_nombre" for="nombre_producto">Nombre</label>
                        <p id="nombre_error" class="text-center red-text">Nombre invalido</p>
                    </div>
                    <div class="input-field col s12">
                        <input id="descripcion_producto" type="text" name="descripcion_producto" class="validate" onchange="validarDescripcion()" onkeypress="validarDescripcion()" onfocusout="validarDescripcion()">
                        <label id="label_descripcion" for="descripcion_producto">Descripción</label>
                        <p id="descripcion_error" class="text-center red-text">Descripción invalida</p>
                    </div>
                    <div class="input-field col s12">
                        <input id="precio_producto" type="number" name="precio_producto" class="validate" onchange="validarPrecio()" onkeypress="validarPrecio()" onfocusout="validarPrecio()">
                        <label id="label_precio" for="precio_producto">Precio</label>
                        <p id="precio_error" class="text-center red-text">Precio invalido</p>
                    </div>
                    <div class="col s12">
                        <button type="submit" class="waves-effect cyan lighten-3 black-text btn " id="boton_crear_producto"><i class="material-icons right" >save</i>Guardar</button>
                        <a class="btn waves-effect black-text red lighten-1" onclick="limpiarCampos()"><i class="material-icons right">backspace</i>Limpiar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row center">
        <div class="col s12">
            <h4>Productos</h4>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <table class="responsive-table highlight">
                <thead >
                    <tr>
                        <th>Nombre</th>
                        <th class="center">Descripción</th>
                        <th class="center">Precio</th>
                        <th class="center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td class="center">{{ $producto->descripcion_producto }}</td>
                            <td class="center">{{ $producto->precio_producto }}</td>
                            <td class="center"> 
                                <a href="{{ route('productos.edit', $producto->id) }}" class="waves-effect cyan lighten-3 black-text btn" ><i class="material-icons">edit</i></a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn waves-effect black-text red lighten-1"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/productos.js') }}"></script>
@endsection