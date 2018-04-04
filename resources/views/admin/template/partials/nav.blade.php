<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MyBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categorías</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Artículos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Imágenes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Etiquetas</a></li>
            @endguest
        </ul>
        <ul class="navbar-nav navbar-right">
            @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
            
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a class="dropdown-item" href="#">Acción 1</a></li>
                        <li><a class="dropdown-item" href="#">Acción 2</a></li>
                        <li><div class="dropdown-divider"></div></li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item" 
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>