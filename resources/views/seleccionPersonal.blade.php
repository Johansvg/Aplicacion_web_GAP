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
           {{-- <form action="{{ route('agenda') }}" method="POST"> --}}
                @csrf
                <div class="col s4">
                    <div id="textsubDemo">SELECCIONE FECHA</div>
                    <div class="input-field">
                        <input type="text" class="datepicker" id="fecha" disabled>
                        <label for="fecha">Fecha</label>
                    </div>
                    <div class="input-field ">
                        <input type="text" class="timepicker" id="hora" disabled>
                        <label for="hora">Hora</label>
                    </div>
                </div>
                <div class="col s8 center">
                    <div id="textsubDemo">SELECCIONE PERSONAL</div>
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
                <div class="col s6">
                    <button type="submit" class="btn  waves-effect waves-teal black-text" id="btn">
                        {{ __('Siguiente') }}
                    </button>
                </div> 
           </form>
        </div>
    </div>
    <div class="col s12 center">
        <div class="input-field col s12">
            <input id="nombre_servicio" type="number" name="nombre_servicio" value="{{ $servicios->nombre_servicio }}" disabled>
            <label id="label_precio" for="nombre_servicio">Servicio</label>
        </div>
    </div>
    <div class="col s12 center">
        <div class="input-field col s12">
            <input id="nombre_centro" type="number" name="nombre_centro" value="{{ $centro->nombre_centro }}" disabled>
            <label id="label_nombre" for="nombre_centro">Centro</label>
        </div>
    </div>
</div>
@endsection
