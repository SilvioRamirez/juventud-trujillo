@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<h1 class="text-center">Roles del Sistema</h1>
		@can('roles.create')
			<a class="btn btn-primary btn-sm" href="{{ url('roles/create') }}"><i class="fa fa-user-plus"></i> Nuevo</a>
		@endcan
		<hr>
		@include('users.fragment.error')
        @include('users.fragment.success')
		<table class="table table-hover" id="t_roles">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Clave</th>
					<th>Descripción</th>
				</tr>
			</thead>
		</table>
	</div>
	
	@include('roles.opciones')

@endsection

@section('script')
	<script src="{{ asset('js/roles.js') }}"></script>
@endsection