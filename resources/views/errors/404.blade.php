@extends('layouts.app')

@section('content')

<h1 class="text-center text-danger display-3">404 - ESTA RUTA NO EXISTE</h1>
<hr>

<div class="flex-center position-ref full-height">
	<div class="top-right links text-center">
		<a class="btn btn-primary " href="{{ url('/home') }}"><i class="fas fa-home"></i> Inicio</a>
	</div>
</div>
    
@endsection