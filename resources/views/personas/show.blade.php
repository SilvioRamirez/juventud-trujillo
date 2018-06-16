@extends('layouts.app')

@section('content')
<h1 class="text-center"> </h1>

<div class="container-fluid">
	<h1 class="text-center">{{ $persona->nombres }} {{ $persona->apellidos }}</h1>

	@include('personas.fragment.error')
	@include('personas.fragment.success')

	{!! Form::open(['route' => 'personas.store', 'method' => 'POST']) !!}

	<ul class="nav nav-tabs">
		<li class="nav-item">

			<a href="#DatosPersonales" class="nav-link active show" data-toggle="tab"><i class="fa fa-address-card"></i> Datos Personales</a>
		</li>
		<li class="nav-item">
			<a href="#RedesSociales" class="nav-link" data-toggle="tab"><i class="fa fa-share-alt"></i> Redes Sociales</a>
		</li>
		<li class="nav-item">
			<a href="#Responsabilidades" class="nav-link" data-toggle="tab"><i class="fa fa-handshake"></i> Responsabilidades</a>
		</li>
		<li class="nav-item">
			<a href="#Actividades" class="nav-link" data-toggle="tab"><i class="fa fa-futbol"></i> Actividades</a>
		</li>
		<li class="nav-item">
			<a href="#CentroVotacion" class="nav-link" data-toggle="tab"><i class="fa fa-university"></i> Centro de Votacion</a>
		</li>
		<li class="nav-item">
			<a href="#Pasatiempos" class="nav-link" data-toggle="tab"><i class="fa fa-universal-access"></i> Inf. de Interes</a>
		</li>
		<li class="nav-item">
			<a href="#Banco" class="nav-link" data-toggle="tab"><i class="fa fa-money-check-alt"></i> Banco</a>
		</li>
		<li class="nav-item">
			<a href="#CargaFamiliar" class="nav-link" data-toggle="tab" onclick="t_familiars();"><i class="fa fa-users"></i> Carga Familiar</a>
		</li>
		<li class="nav-item">
			<a href="#Imagen" class="nav-link" data-toggle="tab" onclick="showImage();"><i class="fa fa-camera"></i> Imagen</a>
		</li>
	</ul>

	<div id="myTabContent" class="tab-content">

		<div class="tab-pane fade active show" id="DatosPersonales">
	  		@include('personas.fragment.autocompleteform')
	  	</div>

	  	<div class="tab-pane fade" id="RedesSociales">
	    	@include('personas.fragment.redesform')
	  	</div>

	  	<div class="tab-pane fade" id="Responsabilidades">
	    	@include('personas.fragment.responsabilidadform')
	  	</div>

	  	<div class="tab-pane fade" id="Actividades">
	    	@include('personas.fragment.actividadesform')
	  	</div>

	  	<div class="tab-pane fade" id="CentroVotacion">
	    	@include('personas.fragment.centrovotacionform')
	  	</div>

	  	<div class="tab-pane fade" id="Pasatiempos">
	    	@include('personas.fragment.pasatiempoform')
	  	</div>

	  	<div class="tab-pane fade" id="Banco">
	    	@include('personas.fragment.bancoform')
	  	</div>

	  	<div class="tab-pane fade" id="CargaFamiliar">
	    	@include('personas.fragment.cargafamiliar')
	  	</div>

	  	<div class="tab-pane fade" id="Imagen">
	    	@include('personas.fragment.imagenform')
	    	@include('personas.fragment.camara')
	  	</div>

	</div>
	<hr>
	<div class="flex-center position-ref full-height">
		<div class="top-right links text-center">				
			{!! Form::button('<i class="fa fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary'])  !!}

			@if (!empty($persona->uuid))
				<button type="button" class="btn btn-success" id="btn-print-carnet"><i class="fa fa-id-badge"></i> Imprimir Carnet</button>
			@endif
		</div>
    </div>
	{!! Form::close() !!}

</div>

<div id="vue">
	@include('familiars.createform')
	@include('familiars.editform')
	@include('familiars.deleteform')
	@include('familiars.opciones')
</div>





@endsection

@section('script')
<script src="{{ asset('js/imagen.js') }}"></script>

@endsection