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
           {{-- <form action="{{ route('seleccionPersonal') }}" method="POST"> --}}
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
                    <div id="textsubDemo">SELECCIONE CENTRO</div>
                    <div class="input-field col s12">
                        @foreach ($centros as $centro)
                        @if ($centro->id == $servicios->id_centro)
                            <option value="{{ $centro->id }}" name="centro" selected>{{ $centro->nombre_centro }}</option>
                        @else
                            <option value=" " name="centro" disabled selected>Seleccione un centro</option>
                            <option value="{{ $centro->id }}" name="centro">{{ $centro->nombre_centro }}</option>
                        @endif
                    @endforeach
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
</div>
@endsection
