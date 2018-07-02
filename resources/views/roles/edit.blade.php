@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<a class="btn btn-primary btn-sm" href="{{ url('/roles') }}"><i class="fa fa-chevron-left"></i> Atras</a>
		

		<div class="col-md-8 offset-2">
        <div class="card border-light mb-3 shadow">
        <div class="card-body">
			<h1 class="text-center"><i class="fa fa-edit"></i> Editar Rol</h1>
			<hr>
        	@include('users.fragment.error')
        	@include('users.fragment.success')

			{!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PUT']) !!}
				
				@include('roles.partials.form')
			
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