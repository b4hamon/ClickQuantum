
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Kit by Creative Tim
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
        color: #fff !important;  /* Texto blanco */
        background-color: #dc3545;  /* Rojo Bootstrap */
        padding: 8px;
        border-radius: 4px;
        font-size: 13px;
        margin-top: 4px;
        font-weight: bold;  
        display: inline-block;
        text-align: center;
        max-width: 100%;
    }
</style>
</head>

<body class="register-page sidebar-collapse">

 @include('menuadmin')

 <div class="page-header min-vh-100 d-flex align-items-center justify-content-center" style="background-image: url('../assets/img/login-image.jpg'); background-size: cover; background-position: center;">
    <div class="filter" style="background: rgba(0, 0, 0, 0.5); position: absolute; width: 100%; height: 100%; top: 0; left: 0;"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card shadow-lg p-4" style="background-color: #f8f9fa; border-radius: 12px;">
                    <h3 class="text-center text-dark fw-bold mb-3">Editar Categoría</h3>
                    
                    <form id="form-edit-category" action="{{ route('categories.update', $categories->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group mt-3">
                            <label for="category_name" class="fw-bold text-secondary">Nombre de la categoría</label>
                            <input type="text" name="category_name" id="category_name" 
                                   value="{{ $categories->category_name }}"  
                                   class="form-control border-0 shadow-sm">
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-success w-50 fw-bold">Editar</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-outline-primary w-50 ms-2 fw-bold">Atrás</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
