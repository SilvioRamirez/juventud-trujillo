@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<h1 class="text-center">Usuarios del Sistema</h1>
		<hr>	

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
	
@endsection

@section('script')
	<script src="{{ asset('js/users.js') }}"></script>
@endsection