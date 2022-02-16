<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno {{$alumno->nombre}}</title>
</head>
<body>
<div>
   <p> Nombre: {{ $alumno->nombre}}</p>
   <p> Apellido: {{ $alumno->apellidos}}</p>
   <p> Edad: {{ $alumno->edad}}</p>
   <p> Dirección: {{ $alumno->direccion}}</p>
   <a href="alumnos"> Consultar Alumnos</a>
</div>
</body>
</html>
