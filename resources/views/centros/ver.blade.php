<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viendo datos del centro {{ $CentroEducacional->nombre}}.</title>
</head>
<body>
<div>
   <p> Nombre: {{ $CentroEducacional->nombre}}</p>
   <p> Apellido: {{ $CentroEducacional->localidad}}</p>
   <p> Edad: {{ $CentroEducacional->direccion}}</p>
   <p> Numero de Alumnos: {{ $CentroEducacional->n_alumnos}}</p>
   <p> ID de Alumnos: {{ $CentroEducacional->n_alumnos}}</p>
   <p> Id de Tipo: {{ $CentroEducacional->n_alumnos}}</p>
   <a href="/centros"> Volver a Centros</a>
</div>
</body>
</html>
