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
            <form action="{{ route('agenda.store') }}" method="POST">
                @csrf
                <div class="col s4">
                    <div id="textsubDemo">SELECCIONE FECHA</div>
                    <div class="input-field">
                        <input type="text" class="datepicker" id="fecha" name="fecha">
                        <label for="fecha">Fecha</label>
                    </div>
                    <div class="input-field ">
                        <input type="text" class="timepicker" id="hora" name="hora">
                        <label for="hora">Hora</label>
                    </div>
                </div>
                <div class="col s8 center">
                    <div id="textsubDemo">RESUMEN</div>
                    <div class="col s12 center">
                        <div class="input-field col s12">
                            <input id="nombre_servicio" type="number" name="nombre_servicio" value="{{ $servicios->nombre_servicio }}" disabled>
                            <label id="label_precio" for="nombre_servicio">Servicio</label>
                        </div>
                    </div>
                    <div class="col s12 center">
                        <div class="input-field col s12">
                            <input id="nombre_centro" type="number" name="nombre_centro" value="{{ $centro->nombre_centro }}" disabled>
                            <label id="label_precio" for="nombre_centro">Centro</label>
                        </div>
                    </div>
                    <div class="col s12 center">
                        <div class="input-field col s12">
                            <input id="nombre_empleado" type="number" name="nombre_empleado" value="{{ $empleado->nombre_empleado }}" disabled>
                            <label id="label_precio" for="nombre_empleado">Empleado</label>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <button type="submit" class="btn  waves-effect waves-teal black-text" id="btn">
                        {{ __('Realizar reserva') }}
                    </button>
                </div> 
           </form>
        </div>
    </div>
    <div class="col s12 center" id="textDemo"></div>
</div>
@endsection

        {{-- <div class="col s4">
            <div class="input-field col s12">
                <select multiple>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Materialize Multiple Select</label>
              </div>
        </div>
        <div class="col s8">
            <form action="{{ route('agenda.store') }}" method="POST">
                @csrf
                <div class="input-field col s12">
                    <input type="text" class="datepicker">
                    <label id="label_" for="nombre_cargo">Fecha de reserva</label>
                    <p id="fecha_error" class="text-center red-text">Fecha incorrecta</p>
                </div>
                <div class="input-field col s12">
                    <select class="input-field" name="servicio">
                        <option value="" name="servicio" disabled selected>Seleccione centro</option>
                        @foreach ($servicios as $servicio)
                            <option value="{{ $servicio->id}}" name="centro" >{{ $servicio->nombre_servicio }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-field col s12">
                    <select class="input-field" name="centro">
                        <option value="" name="centro" disabled selected>Seleccione centro</option>
                        @foreach ($centros as $centro)
                            <option value="{{ $centro->id }}" name="centro">{{ $centro->nombre_centro }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-field col s12">
                    <select class="input-field" name="empleados">
                        <option value="" name="empleado" disabled selected>Seleccione un empleado</option>
                        @foreach ($empleados as $empleado)
                            <option value="{{ $empleado->id }}" name="empleados">{{ $empleado->nombre_empleado }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col s12">
                    <button type="submit" class="waves-effect cyan lighten-3  black-text btn">Enviar</button>
                    <a  class="btn waves-effect black-text red lighten-1"><i class="material-icons right">backspace</i>Limpiar</a>
                </div>
            </form>
        </div> --}}
    {{-- </div>
</div>
@endsection --}}