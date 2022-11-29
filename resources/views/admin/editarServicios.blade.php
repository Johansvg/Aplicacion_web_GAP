<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar servicios</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body id="fondoEditar">
    <div class="container">
        <div class="row">
        </div>
        <div class="row center ">
            <div class="col s2"></div>
            <div class="col s8">
                <h4>Editar productos</h4>
                <div class="divider"></div>
                Ingrese todos los datos requeridos para editar servicio.
                <form action="{{ route('servicios.update', $servicios->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nombre_servicio" type="text" name="nombre_servicio" value="{{ $servicios->nombre_servicio }}" class="validate" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                            <label id="label_nombre" for="nombre_servicio">Nombre</label>
                            <p id="nombre_error" class="text-center red-text">Nombre invalido</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="descripcion_servicio" type="text"  name="descripcion_servicio" value="{{ $servicios->descripcion_servicio }}" class="validate" onchange="validarDescripcion()" onkeypress="validarDescripcion()" onfocusout="validarDescripcion()">
                            <label id="label_descripcion" for="descripcion_servicio">Descripción</label>
                            <p id="descripcion_error" class="text-center red-text">Descripción invalida</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="tiempo_servicio" type="number" name="tiempo_servicio" value="{{ $servicios->tiempo_servicio }}" class="validate" onchange="validarTiempo()" onkeypress="validarTiempo()" onfocusout="validarTiempo()">
                            <label id="label_tiempo" for="tiempo_servicio">Tiempo (minutos)</label>
                            <p id="tiempo_error" class="text-center red-text">tiempo invalido</p>
                        </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="precio_servicio" type="number" name="precio_servicio" value="{{ $servicios->precio_servicio }}" class="validate" onchange="validarPrecio()" onkeypress="validarPrecio()" onfocusout="validarPrecio()">
                            <label id="label_precio" for="precio_servicio">Precio</label>
                            <p id="precio_error" class="text-center red-text">precio invalido</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="input-field" name="centro">
                                @foreach ($centros as $centro)
                                    @if ($centro->id == $servicios->id_centro)
                                        <option value="{{ $centro->id }}" name="centro" selected>{{ $centro->nombre_centro }}</option>
                                    @else
                                        <option value=" " name="centro" disabled selected>Seleccione un centro</option>
                                        <option value="{{ $centro->id }}" name="centro">{{ $centro->nombre_centro }}</option>
                                    @endif
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="input-field" name="empleado">
                                @foreach ($empleados as $empleado)
                                    @if ($empleado->id == $servicios->id_empleado)
                                        <option value="{{ $empleado->id }}" name="empleado" selected>{{ $empleado->nombre_empleado }}</option>
                                    @else
                                        <option value="" name="empleado" disabled selected>Seleccione un empleado</option>
                                        <option value="{{ $empleado->id }}" name="empleado">{{ $empleado->nombre_empleado }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect cyan lighten-3 black-text btn " id="boton_crear_servicio"><i class="material-icons right">save</i>Guardar</button>
                            <a href="{{ route('servicios.index') }}" class="btn waves-effect black-text red lighten-1"><i class="material-icons right">cancel</i>Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s2"></div>
        </div>
    </div>
    <script src="{{ asset('js/mtz.js') }}" defer></script>
    <script src="{{ asset('js/servicios.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>




                
                
