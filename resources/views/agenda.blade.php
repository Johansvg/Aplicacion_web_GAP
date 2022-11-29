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
                <div id="textsubDemo">SELECCIONE FECHA</div>
                <div class="input-field">
                    <input type="text" class="datepicker" id="fecha">
                    <label for="fecha">Fecha</label>
                </div>
                <div class="input-field ">
                    <input type="text" class="timepicker" id="hora">
                    <label for="hora">Hora</label>
                </div>
            </div>
            <div class="col s8 center">
                <div id="textsubDemo">SELECCIONE SERVICIO</div>
                <div class="col s12">
                    <div class="carousel">
                        <a class="carousel-item" href="{{ route('seleccion', 2->id) }}"><img id="img" src="{{asset("img/servicios/manicure.webp")}}"><p id="textsubDemo" class="center black">Manicure</p></a>
                        <a class="carousel-item" href="{{ route('seleccion', 1->id) }}"><img id="img" src="{{asset("img/servicios/corte_cabello.jpg")}}"><p id="textsubDemo" class="center black">Corte de cabello</p></a>
                        <a class="carousel-item" href="{{ route('seleccion', 3->id)}}"><img id="img" src="{{asset("img/servicios/masaje.jpg")}}"><p id="textsubDemo" class="center black">Masaje</p></a>
                    </div>
                </div>
            </div>                
        </div>
        {{-- <div class="row">
            <br>
            <div class="col s6 center">
                <a href="{{route("agenda.index")}}" class=" btn pulse waves-effect btn-large waves-orange black-text" id="btn">Reservar</a>            
            </div>
            <div class="col s6 center" >
                <a class=" btn pulse waves-effect btn-large waves-black black-text" id="btn">Mis citas</a>            
            </div>
        </div> --}}
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