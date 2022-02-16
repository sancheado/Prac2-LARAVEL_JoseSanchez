<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno {{$alumno->nombre}}</title>
</head>
<body>
<form action="/alumnos/editar/{{ $alumno->id}}" method ="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Nombre:</label>
    <input type="text" name="nombre" placeholder="Su nombre" value="{{ $alumno->nombre}}">
    <label>Apellido:</label>
    <input type="text" name="apellidos" placeholder="Su Apellido" value="{{ $alumno->apellidos}}">
    <label>Edad:</label>
    <input type="text" name="edad" placeholder="Su edad" value="{{ $alumno->edad}}">
    <label>Dirección:</label>
    <input type="text" name="direccion" placeholder="Su dirección" value="{{ $alumno->direccion}}">
    <input type="submit" value="Guardar">
</form>
</body>
</html>
