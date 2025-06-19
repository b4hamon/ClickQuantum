
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
              @auth
                  <li class="nav-item d-flex align-items-center">
                    <span class="nav-link">
                        <i class="nc-icon nc-single-02"></i> {{ Auth::user()->name }}
                    </span>
                    <a href="#" class="nav-link text-danger"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nc-icon nc-button-power"></i> Cerrar sesión
                    </a>
                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
              

              @else
                  <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link"><i class="nc-icon nc-planet"></i>
                          Iniciar Sesión</a>
                  </li>
              @endauth
              

            
            <li class="nav-item">
                <a href="{{ route('api_externa.nasa') }}" class="nav-link">
                    <i class="nc-icon nc-planet"></i> NASA API
                </a>
            </li>
            
          </ul>
      </div>
  </div>
</nav>
