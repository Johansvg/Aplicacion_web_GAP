@extends('layouts.app')

@section('content')

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
                <a class=" btn pulse waves-effect btn-large waves-yellow  black-text" id="btn">Reservar</a>            
            </div>
            <div class="col s6 center" >
                <a class=" btn pulse waves-effect btn-large waves-teal black-text" id="btn">Mis citas</a>            
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
                    <a class="carousel-item" href="#one!"><img src="{{asset("img/productos/base.jpg")}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset("img/productos/crema.jpg")}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset("img/productos/tinte.jpg")}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset("img/productos/mask.jpg")}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset("img/productos/labial.jpg")}}"></a>
                </div>
            </div>
            <div class="col s3">
                <img class="right"src="{{asset("img/rayo.png")}}" id="rayoEfecto" />
            </div>
            <div class="col s12 center">
                <span id="textsubDemo" class="black-text">70% OFF</span>
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
                <div class="card center">
                    <div class="card-image">
                        <img src="{{asset("img/trabaja.png")}}">
                        <span id="textsubDemo" class="card-title">Trabaja con nosotros</span>
                    </div>
                    <div class="card-content">
                      <p>
                        Si eres una persona con ganas de trabajar y con experiencia en el rubro de la estética, no dudes en contactarnos.
                      </p>
                    </div>
                    <div class="card-action">
                      <a class="black-text"href="#">Aplicar</a>
                    </div>
               </div>
            </div>
            <div class="col s4">
                <div class="card">
                    <div class="card-content center">
                      <p id="textsubDemo" class="black-text">Experiencias</p>
                    </div>
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a href="#test4">1</a></li>
                        <li class="tab"><a href="#test5">2</a></li>
                        <li class="tab"><a href="#test6">3</a></li>
                      </ul>
                    </div>
                    <div class="card-content grey lighten-4">
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
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="{{asset("img/fachada.jpg")}}">
                    </div>
                    <div class="card-content">
                      <span id="textsubDemo"class="card-title activator grey-text text-darken-4">¿Quiénes somos?<i class="material-icons right">arrow_drop_up</i></span>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Estetic<i class="material-icons right">close</i></span>
                        <p>Somos una empresa que se dedica a la estética y belleza, con más de 10 años de experiencia en el rubro.</p>         
                    </div>
                  </div>
            </div>

        </div>
    </div>
</div>
@endsection