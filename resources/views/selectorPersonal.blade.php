@extends('layouts.app')

@section('content')
<nav>
    <div class="nav-wrapper black">
        <ul>
          <li class="tab"><a href="{{route("login.index")}}">Inicio</a></li>
        </ul>
    </div>
</nav>
<div class="section"  id="sectionDemo" >
    <div class="col s12 center" id="textDemo">RESERVAS</div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col s4">
                <div id="textsubDemo" class="black center">SELECCIONE FECHA</div>
                <div class="input-field">
                    <input type="text" class="datepicker" id="fecha" name="fecha">
                    <label for="fecha">Fecha</label>
                </div>
                <div class="input-field ">
                    <input type="text" class="timepicker" id="hora" name="hora">
                    <label for="hora">Hora</label>
                </div>
            </div>
            <div class="col s12 center">
                <div id="textsubDemo" class="black">SELECCIONE PERSONAL DISPONIBLE</div>
                <table class="responsive-table highlight">
                    <thead >
                        <tr>
                            <th>Nombre</th>
                            <th class="center">Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                            @if ($empleado->id_centro == $centros->id)
                            <tr>
                                <td>{{ $empleado->nombre_empleado }}</td>
                                <td class="center">{{ $empleado->telefono_empleado }}</td>
                                <td class="right"><a href="{{ route('login.index', $empleado->id) }}" class="btn pulse waves-effect waves-yellow   black-text" id="btn">Terminar</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>    
            </div> 
        </div>
    </div>
</div>
@endsection
