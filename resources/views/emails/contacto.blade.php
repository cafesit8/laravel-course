<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Detalles del Curso Creado</h1>
    <p>Título: {{ $course->name }}</p>
    <p>Descripción: {{ $course->category }}</p>
    <p>Año: {{ $course->description }}</p>
</body>

</html>
