<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JPSUV | Trujillo</title>   

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/vue2-datatable-component.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="container-fluid">

        @include('layouts.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables.bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/moment.es.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/tempusdominus-bootstrap-4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/toastr.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/vue.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/axios.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/sweetalert2.all.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/polyfill.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/axios.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/vue2-datatable-component.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jspdf.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    @yield('script')
</body>
</html>
