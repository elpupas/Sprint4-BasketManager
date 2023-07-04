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
 
 
    <form action="{{route('teams.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre:
            <br>
            <input type="text" id="nombre" name="name" value="{{old('name')}}" ><br>
        </label>
        
        @error('name')
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>
    
        <label for="coach">Coach:
            <br>
            <input type="text" id="coach" name="coach" value="{{old('coach')}}"  ><br>
        </label>
        @error('coach')
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>
    
        <label for="arena">Stadium:
            <br>
            <input type="text" id="stadium" name="stadium" value="{{old('stadium')}}" ><br>
        </label>
        
        @error('stadium')
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>
    
        <label for="players">Jugadores:
            <br>
            <input type="number" id="players" name="players" value="{{old('players')}}"  ><br>
        </label>
        @error('players')
        <small>*{{ $message }}</small>
        <br>
    @enderror
       <br>  

        <label for="established_year">Año de fundación:
            <br>
            <input type="number" id="established-year" name="established_year" value="{{old('established_year')}}" ><br>
        </label>
        @error('established_year')
        <small>*{{ $message }}</small>
        <br>
    @enderror
       <br>  

       <button
       type="button"
       class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline"
     >
     <input type="submit" value="send">
     </button>
        
    
    </form>
</body>
</html>