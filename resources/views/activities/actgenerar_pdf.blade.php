
  <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/fabio-mangione.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="motto text-center">
        <h1><b>Retos</b></h1>
        <h3>¡ Pon a prueba tu aprendizaje !</h3>
      </div>
    </div>
  </div>

  <div class="main">
    <div class="section text-center">
    <div class="mt-5">
        <h2 class="text-center"><b> Retos Semanales</b></h2>
        <br></br>
   
        <div class="d-none d-md-block table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Reto</th>
                        <th>Fecha Limite</th>
                        <th>Curso</th>
                  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr>
                            <td>{{ Str::limit($activity->activity_description, 50) }}</td>
                            <td>{{ $activity->activity_date_limit ? \Carbon\Carbon::parse($activity->activity_date_limit)->format('d/m/Y') : 'No publicada' }}</td>
                            <td>{{ $activity->course->course_name }}</td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   
