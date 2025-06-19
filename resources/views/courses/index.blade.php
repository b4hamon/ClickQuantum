<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
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
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    @include('menuadmin')
    <!-- End Navbar -->


    <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/header.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1><b>¡ Aprende Hoy !</b></h1>
                <h3>Explora el futuro hoy, la computación cuántica te espera.</h3>
                <br />
                <a href="https://www.youtube.com/watch?v=YpYuBEzfRlM" class="btn btn-outline-neutral btn-round"><i
                        class="fa fa-play"></i>Ver video</a>
            </div>
        </div>
    </div>


    <div class="main">
        <div class="section text-center">
            <div class="container">

                <div class="mt-5">
                    <h2 class="text-center"><b>Cursos Disponibles</b></h2>
                    <br></br>

                    <div class="d-none d-md-block table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Duracion (H)</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->course_duration }}</td>
                                        <td>{{ Str::limit($course->course_description, 50) }}</td>
                                        <td>
                                            <a href="{{ route('courses.edit', $course->id) }}"
                                                class="btn btn-warning btn-sm">✏️</a>
                                            <form action="{{ route('courses.destroy', $course->id) }}" method="post"
                                                style="display: inline">
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
                        @foreach ($courses as $course)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course->course_name }}</h5>
                                    <p class="card-text"><strong>Descripcion:</strong>
                                        {{ Str::limit($course->course_description, 100) }}</p>
                                    <p class="card-text"><strong>Duracion:</strong> {{ $course->course_duration }}</p>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('courses.edit', $course->id) }}"
                                            class="btn btn-warning btn-sm flex-fill">✏️ Editar</a>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="post"
                                            class="flex-fill">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm w-100">🗑️
                                                Eliminar</button>
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

                <a href="{{ route('descargar-pdf') }}" class="btn btn-success btn-sm">Generar reporte</a>

                <div class="container mt-5">
                    <form id="form-create-course" action="{{ route('courses.store') }}" method="post">                        @csrf
                        <div class="card p-4 shadow-sm">
                            <h3 class="text-center mb-4">Crear Curso</h3>

                            <div class="form-group">
                                <label for="course_name">Título</label>
                                <input type="text" name="course_name" id="course_name" 
                                    class="form-control rounded-3 shadow-sm">
                            </div>

                            <div class="form-group mt-3">
                                <label for="course_description">Descripcion</label>
                                <input type="text" name="course_description" id="course_description" 
                                    class="form-control rounded-3 shadow-sm">
                            </div>


                            <div class="form-group mt-3">
                                <label for="course_duration">Duracion (H)</label>
                                <input type="number" name="course_duration" id="course_duration" 
                                    class="form-control rounded-3 shadow-sm">
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-danger btn-lg px-4 py-2 rounded-3 shadow-lg">
                                    Crear Curso
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('footer')

            <script src="{{ asset('js/validaciones_courses.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
