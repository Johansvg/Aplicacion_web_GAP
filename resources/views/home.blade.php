@extends('layouts.app')

@section('content')
<nav>
    <div class="nav-wrapper black">
        <ul>
          <li class="tab"><a href="#agenda">Citas</a></li>
          <li class="tab"><a href="#productos">Productos</a></li>
          <li class="tab"><a href="#tips">Tips</a></li>
          <li class="tab"><a href="#sobre nosotros">Sobre nosotros</a></li>
        </ul>
    </div>
</nav>
<div class="parallax-container">
    <div class="parallax"><img src="{{asset("img/centro_estetica2.jpg")}}"></div>
</div>
<div class="section"  id="sectionDemo" >
    <div class="divider" id="agenda"></div>
    <div class="col s12 center" id="textDemo">CITAS</div>
    <div class="container">
        <br>
        <div class="row">
            <br>
            <div class="col s6 center">
                <a href="{{route("selectorServicios.index")}}" class=" btn pulse waves-effect btn-large waves-orange black-text" id="btn">Reservar</a>            
            </div>
            <div class="col s6 center" >
                <a class=" btn pulse waves-effect btn-large waves-black black-text" id="btn">Mis citas</a>            
            </div>
            
        </div>
        <br>
    </div>
    <div class="divider" id="productos"></div>
    <div class="col s12 center" id="textDemo">PRODUCTOS</div>
    <div class="container" >
        <div class="row">
            <div class="col s3">
                <img src="{{asset("img/rayo.png")}}" id="rayoEfecto" />
            </div>
            <div class="col s6">
                <div class="carousel">
                    <a class="carousel-item" href="{{route("productosUser.index")}}"><img id="img" src="{{asset("img/productos/base.jpg")}}"><p id="textsubDemo" class="center teal" >$30.000</p></a>
                    <a class="carousel-item" href="{{route("productosUser.index")}}"><img id="img" src="{{asset("img/productos/crema.jpg")}}"><p id="textsubDemo" class="center teal" >$60.000</p></a>
                    <a class="carousel-item" href="{{route("productosUser.index")}}"><img id="img" src="{{asset("img/productos/tinte.jpg")}}"><p id="textsubDemo" class="center teal"  >$32.500</p></a>
                    <a class="carousel-item" href="{{route("productosUser.index")}}"><img id="img" src="{{asset("img/productos/mask.jpg")}}"><p id="textsubDemo" class="center teal" >$10.000</p></a>
                    <a class="carousel-item" href="{{route("productosUser.index")}}"><img id="img" src="{{asset("img/productos/labial.jpg")}}"><p id="textsubDemo" class="center teal" >$25.000</p></a>
                </div>
            </div>
            <div class="col s3">
                <img class="right"src="{{asset("img/rayo.png")}}" id="rayoEfecto" />
            </div>
            <div class="col s12 center">
                <p id="textsubDemo" >70% OFF</p>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="{{asset("img/centro_estetico_2.jpg")}}"></div>
</div>
<div class="section"  id="sectionDemo">
    <div class="divider" id="tips"></div>
    <div class="col s12 center" id="textDemo">TIPS</div>
    <div class="container" >
        <div class="row" >
            <br>
            <div class="video-container">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/mW5iZKOBjmg" title="Valentina Zenere: un look bronceado con cejas perfectas | Secretos de Belleza | VOGUE España" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="divider" id="sobre nosotros"></div>
    <div class="col s12 center " id="textDemo">SOBRE NOSOTROS</div>
    <div class="container" >
        <div class="row">
            <br>
            <div class="col s4 m4">        
                <div class="card center black white">
                    <div class="card-image">
                        <img src="{{asset("img/trabaja.png")}}">
                        <span id="textsubDemo" class="card-title">Trabaja con nosotros</span>
                    </div>
                    <div class="card-content black white-text">
                      <p>
                        Si eres una persona con ganas de trabajar y con experiencia en el rubro de la estética, no dudes en contactarnos.
                      </p>
                    </div>
                    <div class="card-action blue-grey">
                      <a href="#">Aplicar</a>
                    </div>
               </div>
            </div>
            <div class="col s4">
                <div class="card blue-grey">
                    <div class="card-content center">
                      <p id="textsubDemo">Experiencias</p>
                    </div>
                    <div class="card-tabs ">
                      <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#test4">1</a></li>
                        <li class="tab"><a href="#test5">2</a></li>
                        <li class="tab"><a href="#test6">3</a></li>
                      </ul>
                    </div>
                    <div class="card-content black">
                      <div id="test4">
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="{{asset("img/users/user1.png")}}" alt="" class="circle">
                                <span class="title">Ana Lorena</span>
                                <p>Excelente atención</p>
                                <a href="#!" class="secondary-content"></a>
                            </li>
                        </ul>
                      </div>
                      <div id="test5">
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="{{asset("img/users/user2.png")}}" alt="" class="circle">
                                <span class="title">XxJuanXx</span>
                                <p>Muy lentos en el servicio</p>
                                <a href="#!" class="secondary-content"></a>
                            </ul> 
                      </div>
                      <div id="test6">
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="{{asset("img/users/user3.png")}}" alt="" class="circle">
                                <span class="title">Pedrito</span>
                                <p>agradable</p>
                                <a href="#!" class="secondary-content"></a>
                            </ul>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col s4">
                <div class="card blue-grey">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="{{asset("img/fachada.jpg")}}">
                    </div>
                    <div class="card-content">
                      <span id="textsubDemo"class="card-title activator">¿Quiénes somos?<i class="material-icons right">arrow_drop_up</i></span>
                    </div>
                    <div class="card-reveal blue-grey">
                      <span class="card-title white-text">Estética<i class="material-icons right">close</i></span>
                        <p class="white-text">Somos una empresa que se dedica a la estética y belleza, con más de 10 años de experiencia en el rubro.</p>         
                    </div>
                  </div>
            </div>

        </div>
    </div>
</div>
@endsection