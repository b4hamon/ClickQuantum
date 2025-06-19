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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
       
        
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    @include('menuadmin')
    <!-- End Navbar -->

    <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/daniel-olahh.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1><b>Computación Cuántica</b></h1>
                <h3>El futuro de la tecnología está escrito en qubits</h3>
                <br />
                <a href="https://www.youtube.com/watch?v=YpYuBEzfRlM" class="btn btn-outline-neutral btn-round"><i
                        class="fa fa-play"></i>Ver video</a>
                <a href={{ route('activities.index') }} class="btn btn-outline-neutral btn-round"><i
                        class=""></i>Aprender hoy</a>

            </div>
        </div>
    </div>
    <div class="main">
        <div class="section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">¿Qué la hace especial?</h2>
                        <h5 class="description">A diferencia de las computadoras tradicionales, que usan bits (0 o 1),
                            las computadoras cuánticas usan qubits, que pueden estar en superposición (0 y 1 al mismo
                            tiempo). Esto permite realizar múltiples cálculos simultáneamente, lo que hace que ciertos
                            problemas se resuelvan mucho más rápido que con una computadora clásica.</h5>

                    </div>
                </div>
                <br />
                <br />

                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-album-2"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Desafío intelectual</h4>
                                <p class="description">Desarrollarás habilidades analíticas al enfrentar problemas
                                    complejos.</p>
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
                                <p>Resolverás problemas imposibles para las computadoras actuales..</p>
                                <a href="javascript:;" class="btn btn-link btn-danger">Aprender hoy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br></br>

            <div class="col-md-8 ml-auto mr-auto">
                <h5 class="description"><b>¿Te apasiona la tecnología y el futuro de la computación? ¡Este es el momento
                        de sumergirte en el mundo de la computación cuántica y compartir tu conocimiento!</b></h5>
            </div>


            <h2 class="text-center">Nivel de participación de nuestros usuarios</h2>



            <br></br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="card p-4">
                            <canvas id="myChart" style="max-height: 500px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>




            <div class="mt-5">
                <h2 class="text-center"><b> Aportes de la Comunidad</b></h2>
                <br></br>

                <div class="d-none d-md-block table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Título</th>
                                <th>Contenido</th>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ Str::limit($article->content, 50) }}</td>
                                    <td>{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') : 'No publicada' }}
                                    </td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>
                                        <a href="{{ route('articles.edit', $article->id) }}"
                                            class="btn btn-warning btn-sm">✏️</a>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="post"
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
                    @foreach ($articles as $article)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text"><strong>Contenido:</strong>
                                    {{ Str::limit($article->content, 100) }}</p>
                                <p class="card-text"><strong>Fecha:</strong>
                                    {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') : 'No publicada' }}
                                </p>
                                <p class="card-text"><strong>Usuario:</strong> {{ $article->user->name }}</p>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('articles.edit', $article->id) }}"
                                        class="btn btn-warning btn-sm flex-fill">✏️ Editar</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="post"
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

            <div class="container mt-5">
                <form id="form-create-article" action="{{ route('articles.store') }}" method="post">
                    @csrf
                    <div class="card p-4 shadow-sm">
                        <h3 class="text-center mb-4">Crear Artículo</h3>

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" 
                                class="form-control rounded-3 shadow-sm">
                        </div>

                        <div class="form-group mt-3">
                            <label for="content">Contenido</label>
                            <input type="text" name="content" id="content" 
                                class="form-control rounded-3 shadow-sm">
                        </div>

                        <div class="form-group mt-3">
                            <label for="published_at">Fecha</label>
                            <input type="date" name="published_at" id="published_at"
                                value="{{ old('published_at') }}"  class="form-control rounded-3 shadow-sm">
                        </div>


                        <label for="published_at">Usuario</label>
                        <select name="user_id" id="user_id" class="form-control rounded-3 shadow-sm" 
                            readonly>
                            <option value="{{ auth()->user()->id }}" selected>
                                {{ auth()->user()->name }}
                            </option>
                        </select>


                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-danger btn-lg px-4 py-2 rounded-3 shadow-lg">
                                Escribir Articulo
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="container mt-5">
                <div class="card shadow-lg border-0">
                    <div class="card-body text-center">
                        <h2 class="text-primary fw-bold"> Las Maravillas de la Computación Cuántica </h2>
                        <p class="lead text-muted">
                            La computación cuántica es la revolución del futuro. Gracias a los qubits y la
                            superposición,
                            puede procesar información a velocidades inalcanzables para los ordenadores clásicos.
                        </p>
                        <p class="text-dark">
                            Desde descifrar códigos imposibles hasta descubrir nuevos medicamentos, esta tecnología
                            cambiará
                            el mundo en formas que apenas comenzamos a imaginar. Grandes empresas e investigadores están
                            en una
                            carrera para desbloquear su verdadero potencial.
                        </p>

                    </div>
                </div>
            </div>



        </div>
        @include('footer')


        <!--   Core JS Files   -->
        <script src="{{ asset('js/validaciones_article.js') }}"></script>

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

        <script>
            var chartData = {!! $chartData !!};
            console.log(chartData);

            var labels = chartData.map(item => item.date);
            var data = chartData.map(item => item.total);


            var ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Cantidad de artículos',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        </script>

</body>

</html>
