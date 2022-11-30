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
    <div class="col s12 center" id="textDemo">PRODUCTOS</div>
    <div class="container" >
        <div class="row">
            @foreach($productos as $producto)
                <div class="col s3">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator" id="img" src="{{asset("img/productos/base.jpg")}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title center activator grey-text text-darken-4">{{$producto->nombre_producto}}<i class="material-icons right">more_vert</i></span>    
                            <p id="textsubDemo " class="center">
                                <label>
                                    <input type="checkbox" class="filled-in"/>
                                    <span>{{$producto->precio_producto}}</span>
                                </label>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{$producto->nombre_producto}}<i class="material-icons right">close</i></span>
                            <p>{{$producto->descripcion_producto}}</p>
                        </div>
                    </div>    
                </div>       
            @endforeach
        </div>
        <div class="col s12 center">
            <p id="textsubDemo" class="black center"><a href="{{route("pedidos.index", $producto->id)}}">Comprar</a></p>
        </div>
    </div>
</div>
@endsection