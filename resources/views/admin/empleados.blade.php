@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row center">
        <div class="col s2"></div>
        <div class="col s8">
            <h4>Crear empleado</h4>
            <div class="divider"></div>
            Ingrese todos los datos requeridos para crear un empleado.
            <form action="{{ route('empleados.store') }}" method="POST">
                @csrf
                <div class="input-field col s12">
                    <input id="nombre_empleado" type="text" name="nombre_empleado" class="validate" onchange="validarNombre()" onkeypress="validarNombre()" onfocusout="validarNombre()">
                    <label id="label_nombre" for="nombre_empleado">Nombre</label>
                    <p id="nombre_error" class="text-center red-text">Nombre invalido</p>
                </div>
                <div class="input-field col s12">
                    <input id="telefono_empleado" type="number" name="telefono_empleado" class="validate" onchange="validarTelefono()" onkeypress="validarTelefono()" onfocusout="validarTelefono()">
                    <label id="label_telefono" for="telefono_empleado">Teléfono</label>
                    <p id="telefono_error" class="text-center red-text">Telefono invalido</p>
                </div>
                <div class="col s12">
                    <select class="input-field teal " name="centro">
                        <option value="" disabled selected name>Seleccione un centro</option>
                        @foreach ($centros as $centro)
                            <option value="{{ $centro->id }}" name="centro">{{ $centro->nombre_centro }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col s12">
                    <select class="input-field" name="cargo">
                        <option value="" disabled selected>Seleccione un cargo</option>
                        @foreach ($cargos as $cargo)
                            <option value="{{ $cargo->id }}" name="cargo">{{ $cargo->nombre_cargo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row"></div>
                <div class="col s12">
                    <button type="submit" class="waves-effect cyan lighten-3  black-text btn" id="boton_crear_empleado"><i class="material-icons right">save</i>Guardar</button>
                    <a  class="btn waves-effect black-text red lighten-1" onclick="limpiarCampos()"><i class="material-icons right">backspace</i>Limpiar</a>
                </div>
            </form>
        </div>
        <div class="col s2"></div>
    <div class="divider"></div>
    <div class="row center">
        <div class="col s12">
            <h3>Empleados</h3>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <table class="responsive-table highlight">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Centro</th>
                        <th>Cargo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>
                            {{ $empleado->nombre_empleado }}
                        </td>
                        <td class="center">
                            {{ $empleado->telefono_empleado }}
                        </td>
                        <td class="center">
                            @foreach ($centros as $centro)
                                @if ($centro->id == $empleado->id_centro)
                                    {{ $centro->nombre_centro }}
                                @endif
                            @endforeach
                        </td>
                        <td class="center">
                            @foreach ($cargos as $cargo)
                                @if ($cargo->id == $empleado->id_cargo)
                                    {{ $cargo->nombre_cargo }}
                                @endif
                            @endforeach
                        </td>
                        <td class="center">
                            <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn cyan lighten-3 black-text "><i class="material-icons">edit</i></a>
                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn red lighten-1 black-text "><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/empleados.js') }}"></script>
@endsection

