@extends("layouts.admin")

@section("content")
<div class="container">
    <div class="row center">
        <div class="col s2"></div>
        <div class="col s8">
            <h4>Crear servicios</h4>
            <div class="divider"></div>
            Ingrese todos los datos requeridos para crear un servicio.
            <form action="{{ route('servicios.store') }}" method="POST">
                @csrf
                <div class="input-field col s12">
                    <input id="nombre_servicio" type="text" name="nombre_servicio" class="validate" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                    <label id="label_nombre" for="nombre_servicio">Nombre</label>
                    <p id="nombre_error" class="text-center red-text">Nombre invalido</p>
                </div>
                <div class="input-field col s12">
                    <input id="descripcion_servicio" type="text" name="descripcion_servicio" class="validate" onchange="validarDescripcion()" onkeypress="validarDescripcion()" onfocusout="validarDescripcion()">
                    <label id="label_descripcion" for="descripcion_servicio">Descripción</label>
                    <p id="descripcion_error" class="text-center red-text">Descripción invalida</p>
                </div>
                <div class="input-field col s12">
                    <input id="tiempo_servicio" type="number" name="tiempo_servicio" class="validate" onchange="validarTiempo()" onkeypress="validarTiempo()" onfocusout="validarTiempo()">
                    <label id="label_tiempo" for="tiempo_servicio">Tiempo (minutos)</label>
                    <p id="tiempo_error" class="text-center red-text">tiempo invalido</p>
                </div>
                <div class="input-field col s12">
                    <input id="precio_servicio" type="number" name="precio_servicio" class="validate" onchange="validarPrecio()" onkeypress="validarPrecio()" onfocusout="validarPrecio()">
                    <label id="label_precio" for="precio_servicio">Precio</label>
                    <p id="precio_error" class="text-center red-text">precio invalido</p>
                </div>
                <div class="col s12">
                    <select class="input-field teal " name="centro">
                        <option value="" disabled selected name>Seleccione un centro</option>
                        @foreach ($centros as $centro)
                            <option value="{{ $centro->id }}" name="centro" id="centro">{{ $centro->nombre_centro }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row"></div>
                <div class="col s12">
                    <select class="input-field" name="empleado">
                        <option value="" disabled selected>Seleccione un empleado</option>
                        @foreach ($empleados as $empleado)
                            <option value="{{ $empleado->id }}" name="empleado" id="empleado">{{ $empleado->nombre_empleado }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row"></div>
                <div class="col s12">
                    <button type="submit" class="waves-effect cyan lighten-3  black-text btn " id="boton_crear_servicio"><i class="material-icons right">save</i>Guardar</button>
                    <a  class="btn waves-effect black-text red lighten-1" onclick="limpiarCampos()"><i class="material-icons right">backspace</i>Limpiar</a>
                </div>
            </form>
        </div>
        <div class="col s2"></div>
    </div>
    <div class="divider"></div>
    <div class="row center">
        <div class="col s12">
            <h3>Servicios</h3>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <table class="responsive-table highlight">
                <thead >
                    <tr>
                        <th>Nombre</th>
                        <th class="center">Descripción</th>
                        <th class="center">Tiempo</th>
                        <th class="center">Precio</th>
                        <th class="center">Centro</th>
                        <th class="center">Empleado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr>
                            <td>{{ $servicio->nombre_servicio }}</td>
                            <td class="center">{{ $servicio->descripcion_servicio }}</td>
                            <td class="center">{{ $servicio->tiempo_servicio }}</td>
                            <td class="center">{{ $servicio->precio_servicio }}</td>
                            <td class="center">
                                @foreach ($centros as $centro)
                                    @if ($centro->id == $servicio->id_centro)
                                        {{ $centro->nombre_centro }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="center">
                                @foreach ($empleados as $empleado)
                                    @if ($empleado->id == $servicio->id_empleado)
                                        {{ $empleado->nombre_empleado }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="center"> 
                                <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn cyan lighten-3 black-text "><i class="material-icons">edit</i></a>
                                <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn black-text red lighten-1"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/servicios.js') }}"></script>
@endsection