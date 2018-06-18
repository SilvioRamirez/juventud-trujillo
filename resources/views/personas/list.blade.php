@extends('layouts.app')

@section('content')
<h1 class="text-center"> </h1>

<div class="container-fluid">
	<h1 class="text-center">Jovenes Carnetizados</h1>

	@include('personas.fragment.error')
	@include('personas.fragment.success')
	
	<hr>

	<table id="t_personas" class="table table-hover" >
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Cedula</th>
				<th>Telefono_1</th>
				<th>Telefono_2</th>
				<th>Municipio</th>
				<th>Parroquia</th>
				<th>Fecha de Registro</th>
			</tr>
		</thead>
	</table>

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