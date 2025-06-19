<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  @include('menuadmin')
  <!-- End Navbar -->

  <div class="page-header section-dark text-center" style="background-image: url('./assets/img/antoine-barresss.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="filter"></div>
    <div class="content-center d-flex align-items-center justify-content-center flex-column h-100">
        <div class="container">
            <div class="title-brand">
                <h1 class="presentation-title text-white fw-bold">Categorías</h1>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4">
                        <img src="./assets/img/fog-low.png" class="img-fluid d-none d-md-block" alt="">
                    </div>
                    <div class="col-6 col-md-4">
                        <img src="./assets/img/fog-low.png" class="img-fluid d-none d-md-block" alt="">
                    </div>
                </div>
            </div>
            <h2 class="presentation-subtitle text-white px-3">
                La computación cuántica abarca varias categorías principales según su enfoque y aplicaciones.
            </h2>
        </div>
    </div>
    <div class="moving-clouds position-absolute w-100" style="background-image: url('./assets/img/clouds.png'); background-size: cover; height: 20vh;"></div>
</div>



<div class="container mt-5">
  <div class="card border-0">
      <div class="card-body">
        
          <h2 class="text-center fw-bold">Categorías de la Computación Cuántica</h2>
          <div class="row text-center mt-4">
              <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                      <div class="card-body">
                          <h5 class="text-danger fw-bold">📌 Modelos</h5>
                          <p class="text-muted">Basado en puertas cuánticas, adiabático y topológico.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                      <div class="card-body">
                          <h5 class="text-success fw-bold">🌍 Aplicaciones</h5>
                          <p class="text-muted">Criptografía, simulación, optimización y machine learning.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                      <div class="card-body">
                          <h5 class="text-warning fw-bold">⚙️ Hardware</h5>
                          <p class="text-muted">Qubits superconductores, iones atrapados y fotones.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                      <div class="card-body">
                          <h5 class="text-info fw-bold">🧠 Algoritmos</h5>
                          <p class="text-muted">Shor (factorización), Grover (búsqueda) y optimización.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
  <div class="main">
    <div class="section text-center">
    <div class="mt-5">
        <h2 class="text-center"><b> Categorias</b></h2>
        <br></br>
        <div class="d-none d-md-block table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <td>{{ $categorie->category_name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning btn-sm">✏️</a>
                                <form action="{{ route('categories.destroy', $categorie->id) }}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    

        <div class="d-md-none">
            @foreach ($categories as $categorie)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $categorie->category_name }}</h5>
                        <div class="d-flex gap-2">
                            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning btn-sm flex-fill">✏️ Editar</a>
                            <form action="{{ route('categories.destroy', $categorie->id) }}" method="post" class="flex-fill">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm w-100">🗑️ Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <p class="fw-bold text-success">
        ¡El futuro es cuántico y estamos a las puertas de una nueva era tecnológica! 🚀
    </p>

    <div class="container mt-5">
        <form id="form-create-category" action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="card p-4 shadow-sm">
                <h3 class="text-center mb-4">Crear Categoria</h3>
    
                <div class="form-group">
                    <label for="category_name">Nombre de la categoria</label>
                    <input type="text" name="category_name" id="category_name"  class="form-control rounded-3 shadow-sm">
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-danger btn-lg px-4 py-2 rounded-3 shadow-lg">
                        Crear
                    </button>
                </div>
            </div>
        </form>
    </div>
    



</div>
    @include('footer')


  <!--   Core JS Files   -->
  <script src="{{ asset('js/validaciones_categories.js') }}"></script>
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
