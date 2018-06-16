@extends('layouts.app')

@section('content')
<h1 class="text-center">Buscar Persona</h1>

<div class="col-md-12 row justify-content-center">

	@include('personas.fragment.error')
	
	{!! Form::open(['route' => 'personas.index', 'method' => 'GET']) !!}

		@include('personas.fragment.searchform')

	{!! Form::close() !!}
	

</div>

<div class="col-md-8">
	<table class="table table-hover table-striped">
		<tbody>
			@foreach($personas as $persona)
			<tr>
				<td>{{ $persona->id }}</td>
				<td>{{ $persona->nombres }}</td>
				<td>{{ $persona->apellidos }}</td>
				<td>{{ $persona->cedula }}</td>
				<td><a href="{{ route('personas.show', $persona->id ) }}" class="btn btn-primary btn-sm">Ver</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $personas->render() }}
</div>


@endsection
