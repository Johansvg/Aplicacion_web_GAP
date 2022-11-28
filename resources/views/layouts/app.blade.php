<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Login</title>
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
            <nav class="nav-extended">
                <div class="nav-wrapper teal">
                    <a href="#" class="brand-logo center"><img id="logo" src="{{asset("img/Gap_logo.png") }}" height="45" width="120"></a>
                    <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        @if (auth()->check())
                        <li class="disabled"> Bienvenido {{ auth()->user()->name }}</li>
                        <li><a href="{{route("login.destroy")}}"><i class="material-icons right">exit_to_app</i>Salir</a></li>    
                    </ul>
                </div>
                <div class="nav-wrapper teal lighten-1">
                    <ul>
                      <li class="tab"><a href="#agenda">Agenda</a></li>
                      <li class="tab"><a href="#productos">Productos</a></li>
                    </ul>
                </div>
                <ul class="sidenav" id="mobile-demo">
                    
                    <li class="tab"><a href="#agenda">Agenda</a></li>
                    <li class="tab"><a href="#productos">Productos</a></li>
                    <li><a href="{{route("login.destroy")}}">Salir</a></li>
                </ul>
                    @else
                        <li><a href="{{ route('login.index') }}">Iniciar</a></li>
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
</html>
