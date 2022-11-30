@extends('layouts.app')

@section('content')
<nav>
    <div class="nav-wrapper black">
        <ul>
          <li class="tab"><a href="{{route("login.index")}}">Iniciar</a></li>
        </ul>
    </div>
</nav>
<div class="section"  id="sectionDemo" >
    <div class="divider" id="productos"></div>
    <div class="col s12 center" id="textDemo">PEDIDOS</div>
    <div class="container" >
        <div class="row">
            <table class="responsive-table highlight">
                <thead >
                    <tr>
                        <th>Nombre</th>
                        <th class="center">Descripción</th>
                        <th class="center">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        @if ($producto->id)
                        <tr>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td class="center">{{ $producto->descripcion_producto }}</td>
                            <td class="center">{{ $producto->precio_producto }}</td>       
                        </tr>
                        @endif
                    @endforeach
                </tbody>

            </table>    
        </div>
        <div class="col s12 center">
            <p id="textsubDemo" class="black center">Total: </a></p>
        </div>
    </div>
</div>
@endsection