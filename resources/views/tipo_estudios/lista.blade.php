<!DOCTYPE html>
  <head>
    <title>Tipos de Estudios</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <h2 class="text-center m-4 p-1">Listado de Tipos de Estudios de la <strong>Prac2 de LARAVEL</strong>
      <div class="container-fluid mt-3">
      <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Asignaturas</th>
              <th scope="col">Modalidad</th>
              <th scope="col">Numero Alumnos</th>
              <th scope="col">Id Alumno</th>
            </tr>
          </thead>
          @foreach ($TipoEstudios as $tipo)
          <tr>
              <td class="text-center">{{ $tipo->nombre}}</td>
              <td class="text-center">{{ $tipo->asignaturas}}</td>
              <td class="text-center">{{ $tipo->modalidad}}</td>
              <td class="text-center">{{ $tipo->id_alumno}}</td>
              <td>
                  <a href="/tipo_estudios/ver/{{$tipo->id}}"> Ver </a></br>
                  <a href="/tipo_estudios/editar/{{$tipo->id}}"> Editar </a></br>
                  <a href="/tipo_estudios/eliminar/{{$tipo->id}}" onclick="return eliminarTipo('Eliminar Tipo')"> Eliminar </a></br>
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
        function eliminarTipo(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
