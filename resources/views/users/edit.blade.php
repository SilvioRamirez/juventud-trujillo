@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<a class="btn btn-primary btn-sm" href="{{ url('/users') }}"><i class="fa fa-chevron-left"></i> Atras</a>
		
		<div class="col-md-8 offset-2">
        <div class="card border-light mb-3 shadow">
        <div class="card-body">
			<h1 class="text-center"><i class="fa fa-edit"></i> Editar Usuario</h1>
			
        	@include('users.fragment.error')
        	@include('users.fragment.success')
        	<hr>
			{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
				
					<div class="form-group row">
						{!! Html::decode(Form::label('name', '<strong>Nombres y Apellidos: </strong>', ['class' => 'col-sm-4 col-form-label '])) !!}
						<div class="col-sm-8">
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('cedula', '<strong>Cedula:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('cedula', null, ['class' => 'form-control cedula']) !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('telefono', '<strong>Telefono:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('telefono', null, ['class' => 'form-control telefono']) !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('municipio', '<strong>Municipio:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
							{!! Form::select('municipio', $municipios, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar']); !!}
						</div>			
					</div>
					<div class="form-group row">
						{!! Html::decode(Form::label('email', '<strong>Correo:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
						<div class="col-sm-8">
						{!! Form::text('email', null, ['class' => 'form-control ']) !!}
						</div>			
					</div>
					
					<hr>
					<h3>Lista de Roles</h3>
					<div class="form-check">
						<ul class="list-unstyled">
							@foreach($roles as $role)
							<li>
								<label class="form-check-label">
									{{ Form::checkbox('roles[]', $role->id, null) }}
									{{ $role->name }}
									<em>({{ $role->description ?: 'Sin Descripción' }})</em>
								</label>
							</li>
							@endforeach
						</ul>
					</div>

				{!! Form::button('<i class="fa fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary'])  !!}

			{!! Form::close() !!}



        </div>
        </div>
    	</div>
	</div>
@endsection

@section('script')
	<script src="{{ asset('js/users.js') }}"></script>
@endsection