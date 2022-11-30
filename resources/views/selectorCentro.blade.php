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
                <div id="textsubDemo" class="black">SELECCIONE CENTRO DISPONIBLE</div>
                <table class="responsive-table highlight">
                    <thead >
                        <tr>
                            <th>Centro</th>
                            <th class="center">Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($centros as $centro)
                            @if ($centro->id == $servicios->id_centro)
                            <tr>
                                <td>{{ $centro->nombre_centro }}</td>
                                <td class="center">{{ $centro->direccion_centro }}</td>
                                <td class="right"><a href="{{ route('selectorPersonal.edit', $centro->id) }}" class="btn pulse waves-effect waves-yellow   black-text" id="btn">Siguiente</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>    
            </div> 
        </div>
    </div>
    <div class="col s12">
        <div id="textsubDemo" class="black" for="nombre_servicio"></div>
    </div>
</div>
@endsection
