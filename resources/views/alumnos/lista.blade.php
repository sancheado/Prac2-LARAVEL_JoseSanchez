<!DOCTYPE html>
  <head>
    <title>Listado de Alumnos</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <h2 class="text-center m-4 p-1">Listado de Alumnos de la <strong>Prac2 de LARAVEL</strong>
      <div class="container-fluid mt-3">
      <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Edad</th>
              <th scope="col">Dirección</th>
              <th scope="col">Enlaces</th>
            </tr>
          </thead>
          @foreach ($alumnos as $alumno)
          <tr>
              <td class="text-center">{{ $alumno->nombre}}</td>
              <td class="text-center">{{ $alumno->apellidos}}</td>
              <td class="text-center">{{ $alumno->edad}}</td>
              <td class="text-center">{{ $alumno->direccion}}</td>
              <td>
                  <a href="/alumnos/ver/{{$alumno->id}}"> Ver </a></br>
                  <a href="/alumnos/editar/{{$alumno->id}}"> Editar </a></br>
                  <a href="/alumnos/eliminar/{{$alumno->id}}" onclick="return eliminarAlumno('Eliminar Alumno')"> Eliminar </a></br>
              </td>
          </tr>
          @endforeach
      </table>
      </div>
      <div class="container">
        <div class="d-flex justify-content-between">
              <a href="centros/crear"> Nuevo Centro</a>
              <a href="centros"> Ver Centros</a>

              <a href="alumnos/crear">Nuevo Alumno</a>
              <a href="alumnos"> Ver Alumnos</a>

              <a href="tipo_estudios/crear"> Nuevo tipo de estudios</a>
              <a href="tipo_estudios"> Ver Tipo Estudios</a>
          </div>
      </div>
      <script>
        function eliminarAlumno(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
