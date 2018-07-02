@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
	
		<a class="btn btn-primary btn-sm" href="{{ url('/personas/search') }}"><i class="fa fa-chevron-left"></i> Atras</a>
		
		<div class="col-md-8 offset-2">
        <div class="card border-light mb-3 shadow">
        <div class="card-body">
			<h1 class="text-center"><i class="fa fa-user-plus"></i> Nuevo Registro</h1>
			<p class="text-center text-warning lead"><strong>Por favor asegurese de que todos los datos son correctos ya que no pueden ser modificados.</strong></p>
			<hr>
        	@include('users.fragment.error')
        	@include('users.fragment.success')

			{!! Form::open(['route' => 'reps.store', 'method' => 'POST']) !!}
				
					<div class="form-group row">
						{!! Html::decode(Form::label('nombres', '<strong>APELLIDOS Y NOMBRES COMPLETOS: </strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'APELLIDOS Y NOMBRES COMPLETOS']) !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('cedula', '<strong>CEDULA:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('cedula', null, ['class' => 'form-control cedula', 'placeholder' => 'V20200200']) !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('municipio', '<strong>MUNICIPIO:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
							{!! Form::select('municipio', $municipios, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar']); !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('parroquia', '<strong>PARROQUIA:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
							{!! Form::select('parroquia', $parroquias, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar']); !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('edad', '<strong>EDAD:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('edad', null, ['class' => 'form-control', 'placeholder' => '20']) !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('centro_votacion', '<strong>CENTRO DE VOTACION:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('centro_votacion', null, ['class' => 'form-control', 'placeholder' => 'ESCUELA RURAL DE EDUCACION BASICA LAS PALMAS']) !!}
						</div>			
					</div>
				
				{!! Form::button('<i class="fa fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary'])  !!}

			{!! Form::close() !!}

        </div>
        </div>
    	</div>
	</div>
@endsection
