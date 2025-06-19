
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Computación Cuántica y la NASA</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <!-- Custom CSS for larger text -->
  <style>
    body {
      font-size: 1.25rem;
    }
    h1 {
      font-size: 3.5rem;
    }
    h2 {
      font-size: 2.5rem;
    }
    .lead {
      font-size: 1.5rem;
    }
    .list-group-item {
      font-size: 1.25rem;
    }
  </style>
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  @include('menuadmin')
  <!-- End Navbar -->

  <div class="page-header section-dark text-center" style="background-image: url('../assets/img/login-image.jpg'); background-size: cover; background-position: center;">
    <div class="filter"></div>
    <div class="content-center d-flex align-items-center justify-content-center flex-column h-100">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title text-white fw-bold">NASA</h1>
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
          Computación Cuántica y la NASA
        </h2>
      </div>
    </div>
    <div class="moving-clouds position-absolute w-100" style="background-image: url('./assets/img/clouds.png'); background-size: cover; height: 20vh;"></div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <h1 class="display-4">Computación Cuántica y la NASA</h1>
        
        <p class="lead">La computación cuántica es una de las tecnologías más avanzadas y prometedoras del siglo XXI. Su capacidad para procesar información de manera exponencialmente más rápida que las computadoras tradicionales tiene un enorme potencial en múltiples áreas científicas y tecnológicas.</p>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-8 offset-md-2">
        <h2 class="text-center">¿Cómo se vincula con la NASA?</h2>
        <br>
        <p>La NASA ha estado explorando el uso de computadoras cuánticas para mejorar la simulación de fenómenos espaciales, el diseño de materiales avanzados y la optimización de misiones espaciales. Gracias a su capacidad de resolver problemas complejos en segundos, la computación cuántica ayuda a:</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Optimizar rutas de viaje interplanetario.</li>
          <li class="list-group-item">Simular el comportamiento de moléculas en entornos espaciales extremos.</li>
          <li class="list-group-item">Analizar grandes volúmenes de datos obtenidos de telescopios y satélites.</li>
          <li class="list-group-item">Mejorar la seguridad en las comunicaciones cuánticas.</li>
        </ul>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-8 offset-md-2 text-center">
        <h2>Aplicaciones Futuras</h2>
        <br>
        <p>En el futuro, la NASA espera usar la computación cuántica para mejorar la exploración de exoplanetas, desarrollar inteligencia artificial cuántica para robots espaciales y optimizar el análisis de datos de misiones como el telescopio James Webb y el rover Perseverance.</p>
        <br>
        <button id="fetchNasaData" class="btn btn-primary btn-lg">Imagen de la nasa</button>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-8 offset-md-2">
        <div id="nasaContent" class="text-center">
        </div>
      </div>
    </div>
  </div>

  @include('footer')

  <!-- Core JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!-- Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!-- Google Maps Plugin -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <script src="{{ asset('js/nasa.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>