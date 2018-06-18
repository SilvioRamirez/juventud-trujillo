<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="{{ url('/') }}">JPSUV Trujillo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
            @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/personas/search') }}">Carnet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/personas/list') }}">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">Ayuda</a>
                </li>
            @endguest
        </ul>

        <ul class="navbar-nav ml-auto">
            @guest
                <li><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Iniciar Sesión') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Registrarse') }}</a></li>
            @else
                <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> 
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
            @endguest

        </ul>
        
    </div>
</nav>