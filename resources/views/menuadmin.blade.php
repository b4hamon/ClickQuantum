<style>
    .dropdown-menu {
        display: block;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
    }
    .dropdown-menu.show {
        visibility: visible;
        opacity: 1;
    }
    .navbar-nav .nav-item .nav-link {
        display: flex;
        align-items: center;
        gap: 5px;
        white-space: nowrap;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
  <div class="container">
      <div class="navbar-translate">
          <a class="navbar-brand" href="">Click Quantum</a>
          <button class="navbar-toggler navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
          </button>
      </div>

      <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="nc-icon nc-layout-11"></i> Aportes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('articles.index') }}">Artículos</a></li>
                    <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categorías</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('comments.index') }}" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>
                    Comentarios</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link"><i class="nc-icon nc-zoom-split"></i>
                    Cursos</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('activities.index') }}" class="nav-link"><i class="nc-icon nc-user-run"></i>
                    Retos</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('api_externa.nasa') }}" class="nav-link"><i class="nc-icon nc-planet"></i> 
                    NASA API
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarComunidad" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-circle-10"></i> Comunidad
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarComunidad">
                    @if(auth()->check() && (auth()->user()->role && (auth()->user()->role->label == 'administrador' || auth()->user()->role->label == 'profesor')))
                        <a href="{{ route('users.index') }}" class="dropdown-item"><i class="nc-icon nc-single-02"></i> Usuarios</a>
                    @endif
                    @if(auth()->check() && auth()->user()->role && auth()->user()->role->label == 'administrador')
                        <a href="{{ route('roles.index') }}" class="dropdown-item"><i class="nc-icon nc-badge"></i> Roles</a>
                    @endif
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarCuenta" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-single-02"></i> Cuenta
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarCuenta">
                    @auth
                        <span class="dropdown-item disabled"><i class="nc-icon nc-single-02"></i> {{ Auth::user()->name }}</span>
                        <a href="#" class="dropdown-item text-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nc-icon nc-button-power"></i> Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item"><i class="nc-icon nc-planet"></i> Iniciar Sesión</a>
                    @endauth
                </div>
            </li>
            

          </ul>
      </div>
  </div>
</nav>
