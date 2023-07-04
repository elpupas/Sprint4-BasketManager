@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')
<h1>Editar equipos</h1>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('teams.update', $team)}}" method="POST">
       @csrf
       @method('put')
           
       
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" value="{{$team->name}}"><br><br>
    
        <label for="coach">Coach:</label>
        <input type="text" id="coach" name="coach" value="{{$team->coach}}""><br><br>
    
        <label for="Stadium">Stadium:</label>
        <input type="text" id="Stadium" name="stadium" value="{{$team->stadium}}"><br><br>
    
        <label for="players">Jugadores:</label>
        <input type="number" id="players" name="players" value="{{$team->players}}"><br><br>  

        <label for="established-year">Año de fundación:</label>
        <input type="number" id="established-year" name="established_year" value="{{$team->established_year}}"><br><br>
    
        <input type="submit" value="send">
    
    </form>
</body>
</html>