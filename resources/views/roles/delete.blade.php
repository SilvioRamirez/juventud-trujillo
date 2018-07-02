@extends('layouts.app')

@section('content')
	<div class="container-fluid">	
		
		<a class="btn btn-primary btn-sm" href="{{ url('/roles') }}"><i class="fa fa-chevron-left"></i> Atras</a>
		
		<div class="col-md-8 offset-2">
        <div class="card border-light mb-3 shadow">
        <div class="card-body">
			<h1 class="text-center"><i class="fa fa-trash-alt"></i> Eliminar Rol</h1>
			
        	@include('users.fragment.error')
        	@include('users.fragment.success')
			<hr>
			{!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
				
				<h2 class="text-center">¿Segur@ de eliminar el Rol <strong>{{ $role->name }}</strong>?</h2>
				<hr>
				<div class="flex-center position-ref full-height">
			        <div class="top-right links text-center">
			            {!! Form::button('<i class="fa fa-trash-alt"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-lg'])  !!}
			        </div>
			    </div>

			{!! Form::close() !!}



        </div>
        </div>
    	</div>
	</div>
@endsection

@section('script')
	<script src="{{ asset('js/roles.js') }}"></script>
@endsection