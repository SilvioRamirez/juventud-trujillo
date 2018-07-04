@extends('layouts.app')

@section('content')


<img src="{{ asset('img/logo.jpg') }}" alt="JPSUV" class="mx-auto d-block">
<h1 class="text-center text-danger display-3">Estado Trujillo</h1>
<hr>

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links text-center">
                @auth
                    <a class="btn btn-primary " href="{{ url('/home') }}"><i class="fas fa-home"></i> Inicio</a>
                @else
                    <a class="btn btn-primary" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                    {{-- <a class="btn btn-info" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registrarse</a> --}}
                @endauth
            </div>
        @endif
    </div>
@include('layouts.footer')
@endsection