<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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


    <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/fabio-mangione.jpg');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1><b>Comentarios</b></h1>
                <h3>Tu opinión es importante. ¡Déjanos tu comentario y hagamos crecer la conversación!</h3>


            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card border-0 p-5">
                    <h3 class="card-title text-center text-primary mb-4 font-weight-bold">¡Queremos escuchar tu opinión!
                    </h3>
                    <p class="card-text text-muted text-center mb-4">
                        Si tienes algo que compartir, por favor deja tu comentario. A continuación, te damos algunas
                        recomendaciones para que tu participación sea lo más valiosa posible:
                    </p>

                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-thumbs-up text-success"></i>
                            <strong>Sé respetuoso:</strong> Siempre mantén el respeto hacia los demás. Queremos que
                            todos se sientan bienvenidos.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-pen text-warning"></i>
                            <strong>Explica tu punto de vista:</strong> Sé claro y específico para que tu comentario sea
                            útil y comprensible para los demás.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-ban text-danger"></i>
                            <strong>Evita el spam:</strong> No incluyas enlaces o contenido no relacionado con el tema.
                            Queremos mantener la conversación relevante.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-share-alt text-info"></i>
                            <strong>Comparte tu experiencia:</strong> Tu opinión basada en la experiencia personal puede
                            ser muy valiosa para la comunidad.
                        </li>
                    </ul>

                    <p class="card-text text-muted text-center mt-4">
                        ¡Gracias por participar y enriquecer la conversación! 🌟
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center"> Nuestro usuario mas activo</h2>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card p-4">
                    <canvas id="commentsChart" style="max-height: 400px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="section text-center">
            <div class="mt-5">
                <h2 class="text-center"><b> Opiniones de nuestros usuarios</b></h2>
                <br></br>

                <div class="d-none d-md-block table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Articulo</th>
                                <th>Fecha</th>
                                <th>Comentarios</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->article->title }}</td>
                                    <td>{{ $comment->comment_date ? \Carbon\Carbon::parse($comment->comment_date)->format('d/m/Y') : 'No publicada' }}
                                    </td>
                                    <td>{{ Str::limit($comment->comment_content, 50) }}</td>
                                    <td>{{ $comment->user->name }}</td>
                                    <td>
                                        <a href="{{ route('comments.edit', $comment->id) }}"
                                            class="btn btn-warning btn-sm">✏️</a>
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="post"
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
                    @foreach ($comments as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comment->article->title }}</h5>
                                <p class="card-text"><strong>Comentario:</strong>
                                    {{ Str::limit($comment->comment_content, 100) }}</p>
                                <p class="card-text"><strong>Fecha:</strong>
                                    {{ $comment->comment_date ? \Carbon\Carbon::parse($comment->comment_date)->format('d/m/Y') : 'No publicada' }}
                                </p>
                                <p class="card-text"><strong>Usuario:</strong> {{ $comment->user->name }}</p>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('comments.edit', $comment->id) }}"
                                        class="btn btn-warning btn-sm flex-fill">✏️ Editar</a>
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="post"
                                        class="flex-fill">
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
            <div class="container mt-5">
                <form id="form-create-comment" action="{{ route('comments.store') }}" method="post">
                    @csrf
                    <div class="card p-4 shadow-sm">
                        <h3 class="text-center mb-4">Dejanos tu comentario</h3>

                        <div class="form-group">
                            <label for="comment_content">Se respetuoso</label>
                            <input type="text" name="comment_content" id="comment_content"
                                class="form-control rounded-3 shadow-sm">
                        </div>

                        <div class="form-group mt-3">
                            <label for="comment_date">Fecha</label>
                            <input type="date" name="comment_date" id="comment_date"
                                value="{{ old('comment_date') }}" class="form-control rounded-3 shadow-sm">
                        </div>


                        <div class="form-group mt-3">
                            <label for="article_id">Selecciona el articulo</label>
                            <select name="article_id" id="article_id" class="form-control rounded-3 shadow-sm">
                                <option value="">Seleccione</option>
                                @foreach ($articles as $article)
                                    <option value="{{ $article->id }}"
                                        {{ old('article_id') == $article->id ? 'selected' : '' }}>
                                        {{ $article->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <label for="published_at">Usuario</label>
                        <select name="user_id" id="user_id" class="form-control rounded-3 shadow-sm" readonly>
                            <option value="{{ auth()->user()->id }}" selected>
                                {{ auth()->user()->name }}
                            </option>
                        </select>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-danger btn-lg px-4 py-2 rounded-3 shadow-lg">
                                Comentar
                            </button>
                        </div>
                    </div>
                </form>
            </div>



        </div>
        @include('footer')


        <!--   Core JS Files   -->

        <script src="{{ asset('js/validaciones_comments.js') }}"></script>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const ctx = document.getElementById('commentsChart').getContext('2d');

                const users = @json($commentCounts->pluck('user.name'));
                const commentCounts = @json($commentCounts->pluck('total'));

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: users,
                        datasets: [{
                            label: 'Comentarios por usuario',
                            data: commentCounts,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>


</body>

</html>
