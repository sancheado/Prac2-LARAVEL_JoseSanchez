<!DOCTYPE html>
  <head>
    <title>Listado de Centros</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <h2>Listado de Centros de la <strong>Prac2 de LARAVEL</strong>
      <div class="container-fluid">
      <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Localidad</th>
              <th scope="col">Direccion</th>
              <th scope="col">Numero Alumnos</th>
              <th scope="col">Enlaces</th>
            </tr>
          </thead>
          @foreach ($CentroEducacional as $centro)
          <tr>
              <td>{{ $centro->nombre}}</td>
              <td>{{ $centro->localidad}}</td>
              <td>{{ $centro->direccion}}</td>
              <td>{{ $centro->n_alumnos}}</td>
              <td>
                  <a href="/centros/ver/{{$centro->id}}"> Ver </a></br>
                  <a href="/centros/editar/{{$centro->id}}"> Editar </a></br>
                  <a href="/centros/eliminar/{{$centro->id}}"> Eliminar </a></br>
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
              <a href="alumnos"> Consultar Alumnos</a>

              <a href="tipo_estudios"> Consultar Tipo Estudios</a>
              <a href="tipo_estudios/crear"> Crear tipo de estudios</a>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
