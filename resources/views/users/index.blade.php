@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<h1 class="text-center">Usuarios del Sistema</h1>
		@can('users.create')
			<a class="btn btn-primary btn-sm" href="{{ url('users/create') }}"><i class="fa fa-user-plus"></i> Nuevo</a>
		@endcan
		<hr>
		@include('users.fragment.error')
        @include('users.fragment.success')
		<table class="table table-hover" id="t_users">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Cedula</th>
					<th>Telefono</th>
					<th>Correo</th>
				</tr>
			</thead>
		</table>
	</div>
	
	@include('users.opciones')

@endsection

@section('script')
	<script src="{{ asset('js/users.js') }}"></script>
@endsection