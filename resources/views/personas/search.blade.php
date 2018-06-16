@extends('layouts.app')

@section('content')

<h1 class="text-center">Buscar</h1>

<div class="col-md-12 row justify-content-center">

	@include('personas.fragment.error')
	
	{!! Form::open(['route' => 'personas.index', 'method' => 'GET']) !!}

		@include('personas.fragment.searchform')

	{!! Form::close() !!}
	

</div>

@endsection
