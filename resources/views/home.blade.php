@extends('layouts.app')

@section('content')

@include('layouts.cont')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de control</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Has iniciado sesión!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@include('layouts.footer')
@endsection
