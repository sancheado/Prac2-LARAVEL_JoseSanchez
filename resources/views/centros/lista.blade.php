<!DOCTYPE html>
  <head>
    <title>Listado de Centros</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <h2 class="text-center m-4 p-1">Listado de Centros de la <strong>Prac2 de LARAVEL</strong>
      <div class="container-fluid mt-3">
      <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Localidad</th>
              <th scope="col">Direccion</th>
              <th scope="col">Numero Alumnos</th>
              <th scope="col">Id Alumno</th>
              <th scope="col">Id Tipo de Estudios</th>
              <th scope="col">Enlaces</th>
            </tr>
          </thead>
          @foreach ($CentroEducacional as $centro)
          <tr>
              <td class="text-center">{{ $centro->nombre}}</td>
              <td class="text-center">{{ $centro->localidad}}</td>
              <td class="text-center">{{ $centro->direccion}}</td>
              <td class="text-center">{{ $centro->n_alumnos}}</td>
              <td class="text-center">{{ $centro->id_alumno}}</td>
              <td class="text-center">{{ $centro->id_tipo}}</td>
              <td class="text-center">
                  <a href="/centros/ver/{{$centro->id}}"> Ver </a></br>
                  <a href="/centros/editar/{{$centro->id}}"> Editar </a></br>
                  <a href="/centros/eliminar/{{$centro->id}}" onclick="return eliminarCentro('Eliminar Centro')"> Eliminar </a></br>
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
        function eliminarCentro(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
