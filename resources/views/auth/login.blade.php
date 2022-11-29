@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row">
            <br>
            <div class="col s3"></div>
            <div id="fondoLogin" class="mx-auto my-10 p-20 w-1/2 border rounded-lg shadow-lg">
                <h1 class="text-3xl text-center font-bold">Inicio de sesión</h1>
                <form action="{{ route('login.index') }}" method="POST">
                    @csrf
                    <br>    
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <label for="email" id="labels">Email</label>
                        <input type="email" name="email" id="email" class="validate @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <label for="password" id="labels">Password</label>
                        <input type="password" name="password" id="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @error('message')
                        <p class="border border-red-500 rounded-md bg-red w-full text-red-600 p-2 my-2">* {{$message}}</p>
                    @enderror
                    <div class="section ">
                        <div>
                            <div class="col s1"></div>
                            <div class="col s6">
                                <button type="submit" class="btn  waves-effect waves-teal black-text" id="btn">
                                    {{ __('Iniciar') }}
                                </button>
                            </div>
                            <div class="col s5">
                                <a href="{{route("register.index")}}" class="btn waves-effect waves-orange black-text" id="btn">
                                    {{ __('Registro') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s3"></div>
        </div>
    </div>
@endsection