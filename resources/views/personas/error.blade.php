@extends('layouts.app')

@section('content')
<h1 class="text-center"> </h1>

<div class="col-md-12 row justify-content-center">

	<div class="alert alert-danger">
		<strong>{{ $cedula }}</strong> {{ $error }}
	</div>

</div>

<div class="flex-center position-ref full-height">
    <div class="top-right links text-center">
                
        <a href="/personas/search" class="btn btn-info"><i class="fa fa-chevron-left"></i> Volver</a>
		<a href="/reps/create" class="btn btn-primary"><i class="fa fa-user-plus"></i> Crear Registro</a>
               
    </div> 
</div>

@endsection
