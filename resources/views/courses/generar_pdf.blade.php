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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->course_duration }}</td>
                            <td>{{ Str::limit($course->course_description, 50) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    <p class="fw-bold text-success">
        ¡El futuro es cuántico y estamos a las puertas de una nueva era tecnológica! 🚀
    </p>
</div>
  