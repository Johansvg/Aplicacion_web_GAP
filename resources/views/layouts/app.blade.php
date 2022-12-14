<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')GAP</title>
    {{-- Styles --}}
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/mtz.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>GAP</title>
</head>
    <body id="fondoApp">
        <div id="app" class="col s12 m12 l12" >
            <nav class="nav-extended" >
                <div class="nav-wrapper black" id="nav">
                    <a href="#" class="brand-logo center"><img id="logo" src="{{asset("img/Gap_logo.png") }}" height="45" width="120"></a>
                    <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    @if (auth()->check())                    
                    <ul id="nav-mobile" class="right hide-on-med-and-down"> 
                        <li><a href="{{route("login.destroy")}}"><i class="material-icons right">exit_to_app</i>Salir</a></li>   
                    </ul>
                    <a class="right">Bienvenido {{ auth()->user()->name }}</a>
                    
                </div>
                <ul class="sidenav" id="mobile-demo">
                    
                    <li class="tab"><a href="#agenda">Agenda</a></li>
                    <li class="tab"><a href="#productos">Productos</a></li>
                    <li class="tab"><a href="#tips">Tips</a></li>
                      <li class="tab"><a href="#vacantes">Sobre nosostros</a></li>
                    <li><a href="{{route("login.destroy")}}">Salir</a></li>
                </ul>
                    @else
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{ route('login.index') }}">Inicio</a></li>
                        <li><a href="{{ route('register.index') }}">Registro</a></li>
                    </ul>
                </div>
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="{{route("login.destroy")}}">Salir</a></li>
                </ul>                
                    @endif    
            </nav>
            <main >
                @yield('content')
            </main>
        </div>
        <script src="{{ asset('js/mtz.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h6 class="white-text">Est??tica</h6>
                    <p class="grey-text text-lighten-4">Manizales, Caldas.<br></p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            ?? 2022 GAP 
            <a class="grey-text text-lighten-4 right" href="#!">1.0</a>
            </div>
        </div>
    </footer>
</html>
