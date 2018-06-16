@extends('layouts.app')

@section('content')
<h1 class="text-center"> </h1>

<div class="col-md-12 row justify-content-center">

	<div class="alert alert-danger">
		<strong>{{ $cedula }}</strong> {{ $error }} <a href="/personas/search" class="alert-link">Volver</a>
	</div>

</div>


@endsection
