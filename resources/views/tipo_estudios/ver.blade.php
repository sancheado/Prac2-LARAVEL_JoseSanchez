<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viendo datos del centro.</title>
</head>
<body>
<div>
   <p> Nombre: {{ $tipo_estudios->nombre}}</p>
   <p> Asignaturas: {{ $tipo_estudios->asignaturas}}</p>
   <p> Modalidad: {{ $tipo_estudios->modalidad}}</p>
   <p> ID de Alumnos: {{ $tipo_estudios->id_alumno}}</p>
   <a href="/tipo_estudios"> Volver a Centros</a>
</div>
</body>
</html>
