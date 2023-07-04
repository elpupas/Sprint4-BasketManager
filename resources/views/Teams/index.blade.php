@extends('layouts.plantilla')
@section('title', 'Team')
@section('content')
<h1>Todos los equipos</h1>
<button
        type="button"
        class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
      >
      <a href="{{route('teams.create')}}">Registrar equipo</a>

      </button>
<a href="{{route('games.index')}}"><button></button></a>


    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- component -->
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-center">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                  Coach
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                  Stadium
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Players
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Established Year
                  </th>
              </tr>
            </thead>
            
            <tbody>
                @foreach ($teams as $team)
             
            
              <tr class="border-b bg-purple-100 border-purple-200">
                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                   <a href="{{route('teams.show', $team->id)}}"> {{$team->name}} </a>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$team->coach}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$team->stadium}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$team->players}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$team->established_year}}
                </td>
              </tr>
          
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    <!-- Show Teams -->
 
    <ul>
        <li></li>
    </ul>
   
</body>
</html>
@endsection