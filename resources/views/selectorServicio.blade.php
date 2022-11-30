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
            <div class="col s12 center">
                <div id="textsubDemo" class="black">SELECCIONE SERVICIO</div>
                <table class="responsive-table highlight">
                    <thead >
                        <tr>
                            <th>Servicio</th>
                            <th class="center">Descripción</th>
                            <th class="center">Tiempo</th>
                            <th class="center">Precio</th>
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
                                <td class="center"> 
                                    <a href="{{ route('selectorCentros.edit', $servicio->id) }}" class="btn pulse waves-effect waves-yellow   black-text" id="btn">Siguiente</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>                
        </div>
    </div>
    <div class="col s12 center" id="textDemo"></div>
</div>
@endsection
