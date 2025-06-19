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
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
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
            color: #ffffff !important;  /* Texto blanco para que contraste */
            background-color: #ff0000;  /* Fondo rojo intenso */
            padding: 5px;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 5px;
            font-weight: bold;  /* Texto en negrilla */
        }
    </style>    
</head>

<body class="register-page sidebar-collapse">
    <!-- Navbar -->
    @include('menuadmin')



    <div class="page-header min-vh-100 d-flex align-items-center justify-content-center"
        style="background-image: url('../assets/img/login-image.jpg'); background-size: cover; background-position: center;">
        <div class="filter"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card card-register shadow-lg p-4">

                        <form id="edit-activity-form" action="{{ route('activities.update', $activities->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group mt-3">
                                <label for="activity_description">Descripcion del reto</label>
                                <input type="text" name="activity_description" id="activity_description"
                                    value="{{ $activities->activity_description }}"  class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for="activity_date_limit">Fecha Limite</label>
                                <input type="date" name="activity_date_limit" id="activity_date_limit"
                                    value="{{ old('activity_date_limit', $activities->activity_date_limit ? date('Y-m-d', strtotime($activities->activity_date_limit)) : '') }}"
                                     class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for="id_course">Selecciona el curso</label>
                                <select name="id_course" id="id_course" class="form-control" >
                                    <option value="">Seleccione</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"
                                            {{ old('id_course', $activities->id_course) == $course->id ? 'selected' : '' }}>
                                            {{ $course->course_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" class="btn btn-success w-50">Editar Reto</button>
                                <a href="{{ route('activities.index') }}" class="btn btn-primary w-50 ml-2">Atrás</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--   Core JS Files   -->
    <script src="{{ asset('js/validaciones_reto.js') }}"></script>
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
