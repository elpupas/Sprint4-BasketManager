@extends('layouts.plantilla')
@section('title', 'Create')
@section('content')
<h1>Crear equipos</h1>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" required><br><br>
    
        <label for="coach">Coach:</label>
        <input type="text" id="coach" name="coach" required><br><br>
    
        <label for="arena">Arena:</label>
        <input type="text" id="arena" name="arena" required><br><br>
    
        <label for="players">Jugadores:</label>
        <input type="number" id="players" name="players" required><br><br>  

        <label for="established-year">Año de fundación:</label>
        <input type="number" id="established-year" name="established_year" required><br><br>
    
        <input type="submit" value="send">
    
    </form>
</body>
</html>