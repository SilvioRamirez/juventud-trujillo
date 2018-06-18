@extends('layouts.app')

@section('content')
<h1 class="text-center"> </h1>

<div class="container-fluid">
	<h1 class="text-center">Jovenes Carnetizados</h1>

	@include('personas.fragment.error')
	@include('personas.fragment.success')
	
	<hr>
	<div class="flex-center position-ref full-height">
		<div class="top-right links text-center">				

			
		</div>
    </div>


</div>

<div id="list">
	
</div>

@endsection

@section('script')
<script src="{{ asset('js/list.js') }}"></script>

@endsection