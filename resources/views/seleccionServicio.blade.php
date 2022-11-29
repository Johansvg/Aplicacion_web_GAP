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
           {{-- <form action="{{ route('seleccionCentro') }}" method="POST"> --}}
                @csrf
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
                    <div class="input-field col s12">
                        <select class="input-field" name="servicio">
                            <option value="" name="servicio" disabled selected>Seleccione centro</option>
                            @foreach ($servicios as $servicio)
                                <option value="{{ $servicio->id}}" name="centro" >{{ $servicio->nombre_servicio }}</option>
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
    <div class="col s12 center" id="textDemo"></div>
</div>
@endsection
