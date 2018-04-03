<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MyBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Categorías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Imágenes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Etiquetas</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Pagina principal</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Opción 1</a>
                    <a class="dropdown-item" href="#">Opción 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Salir</a>
                </div>
            </li>
        </ul>
    </div>
</nav>