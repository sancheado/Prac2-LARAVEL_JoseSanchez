<!DOCTYPE html>
  <head>
    <title>Listado de Alumnos</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <a href="/alumnos"> Ver listado de alumnos</a>
      <h2>Nuevo Alumno</h2>
      <div class="container-fluid">
        <form action="/alumnos/crear" method ="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Su nombre">
            <label>Apellido:</label>
            <input type="text" name="apellidos" placeholder="Su Apellido">
            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Su edad">
            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Su dirección">
            <input type="number" name="id_centro" placeholder="Id de su centro">
            <input type="submit" value="Guardar">
        </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
