<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Computación Cuántica</title>
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .card-hover {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: #ffffff; /* Fondo blanco para las tarjetas */
      color: #000000; /* Texto negro dentro de las tarjetas */
    }
    .card-hover:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }
    .icon-lg {
      font-size: 3rem;
      color: #007bff;
    }
    .section-dark {
      background-color: #343a40;
      padding: 60px 0;
      color: #ffffff;
    }
    .section-dark h2 {
      color: #ffffff;
    }
    .section-dark p {
      color: #f8f9fa;
    }
    .section-light {
      background-color: #f8f9fa;
      padding: 60px 0;
      color: #343a40;
    }
    .section-light h2 {
      color: #343a40;
    }
    .section-light p {
      color: #6c757d;
    }
    .card-title {
      color: #000000;
    }
    .card-text {
      color: #000000;
    }
  </style>
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  @include('menusinlogin')
  <!-- End Navbar -->

  <div class="page-header section-dark text-center" style="background-image: url('./assets/img/antoine-barres.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="filter"></div>
    <div class="content-center d-flex align-items-center justify-content-center flex-column h-100">
        <div class="container">
            <div class="title-brand">
                <h1 class="presentation-title text-white fw-bold">QUBITs</h1>
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4">
                        <img src="./assets/img/fog-low.png" class="img-fluid d-none d-md-block" alt="">
                    </div>
                </div>
            </div>
            <h2 class="presentation-subtitle text-white px-3">
              El futuro de la tecnología se teje entre ellos
            </h2>
            <br />
            <a href="https://www.youtube.com/watch?v=YpYuBEzfRlM" class="btn btn-outline-neutral btn-round"><i class="fa fa-play"></i>Ver video</a>
            <a href={{route('activities.index') }} class="btn btn-outline-neutral btn-round"><i class=""></i>Aprender hoy</a>
        </div>
    </div>
    <div class="moving-clouds position-absolute w-100" style="background-image: url('./assets/img/clouds.png'); background-size: cover; height: 20vh;"></div>
  </div>

  <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">¿Qué la hace especial?</h2>
            <h5 class="description">A diferencia de las computadoras tradicionales, que usan bits (0 o 1), las computadoras cuánticas usan qubits, que pueden estar en superposición (0 y 1 al mismo tiempo). Esto permite realizar múltiples cálculos simultáneamente, lo que hace que ciertos problemas se resuelvan mucho más rápido que con una computadora clásica.</h5>
          </div>
        </div>
        <br/>
        <br/>

        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-album-2"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Desafío intelectual</h4>
                <p class="description">Desarrollarás habilidades analíticas al enfrentar problemas complejos.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">Aprender hoy</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-bulb-63"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Oportunidades laborales</h4>
                <p>Alta demanda de expertos en este campo emergente.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">Aprender hoy</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-chart-bar-32"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Impacto global</h4>
                <p>Transformarás industrias como salud y tecnología</p>
                <a href="javascript:;" class="btn btn-link btn-danger">Aprender hoy</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="nc-icon nc-sun-fog-29"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Innovación futura</h4>
                <p>Resolverás problemas imposibles para las computadoras actuales.</p>
                <a href="javascript:;" class="btn btn-link btn-danger">Aprender hoy</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br></br>
      <div class="col-md-8 ml-auto mr-auto">
        <h5 class="description"><b>¿Te apasiona la tecnología y el futuro de la computación? ¡Este es el momento de sumergirte en el mundo de la computación cuántica y compartir tu conocimiento!</b></h5>
      </div>
      <br>

      <div class="section-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Aplicaciones de la Computación Cuántica</h2>
              <h5 class="description">Descubre cómo la computación cuántica está transformando el mundo.</h5>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
              <div class="card card-hover text-center p-4">
                <i class="fas fa-lock icon-lg mb-3"></i>
                <h4 class="card-title">Criptografía</h4>
                <p class="card-text">Los algoritmos cuánticos pueden romper los sistemas de cifrado actuales, pero también permiten desarrollar métodos de cifrado más seguros.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-hover text-center p-4">
                <i class="fas fa-network-wired icon-lg mb-3"></i>
                <h4 class="card-title">Optimización</h4>
                <p class="card-text">Resolver problemas de optimización complejos, como la logística y la planificación de rutas, en tiempo récord.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-hover text-center p-4">
                <i class="fas fa-atom icon-lg mb-3"></i>
                <h4 class="card-title">Simulaciones</h4>
                <p class="card-text">Simular moléculas y reacciones químicas para acelerar el descubrimiento de nuevos medicamentos y materiales.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-light">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Desafíos de la Computación Cuántica</h2>
              <h5 class="description">A pesar de su potencial, la computación cuántica enfrenta varios desafíos.</h5>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="card card-hover text-center p-4">
                <i class="fas fa-exclamation-triangle icon-lg mb-3"></i>
                <h4 class="card-title">Coherencia Cuántica</h4>
                <p class="card-text">Mantener los qubits en estado de coherencia es extremadamente difícil debido a la decoherencia.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-hover text-center p-4">
                <i class="fas fa-bug icon-lg mb-3"></i>
                <h4 class="card-title">Corrección de Errores</h4>
                <p class="card-text">Los qubits son propensos a errores, y la corrección de errores cuánticos es un campo en desarrollo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">El Futuro de la Computación Cuántica</h2>
              <h5 class="description">El futuro es prometedor, con avances en hardware, algoritmos y aplicaciones prácticas.</h5>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card card-hover text-center p-4">
                <i class="fas fa-rocket icon-lg mb-3"></i>
                <h4 class="card-title">Transformación Global</h4>
                <p class="card-text">A medida que superamos los desafíos técnicos, la computación cuántica podría transformar industrias enteras y resolver problemas que hoy consideramos imposibles.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('footer')

  <!--   Core JS Files   -->
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
</body>

</html>