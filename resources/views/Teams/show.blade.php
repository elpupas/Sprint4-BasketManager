@extends('layouts.plantilla')
@section('title', 'Show')
@section('content')
    <h1>mosttrar</h1>
    <a href="{{ route('teams.index') }}"><button>Index</button></a>
    <a href="{{ route('teams.create') }}"><button>Crear Equipo</button></a>
    <a href="{{ route('games.create', $team->id) }}">Crear Partido</a>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Nombre Equipo</th>
                        <th>Coach</th>
                        <th>Stadium</th>
                        <th>Players</th>
                        <th>Established year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->coach }}</td>
                        <td>{{ $team->stadium }}</td>
                        <td>{{ $team->players }}</td>
                        <td>{{$team->established_year}}</td>
                    </tr>
                </tbody>

            </table>
        </div>
          <div>
        <a href="{{ route('teams.edit', $team->id) }}"><button>Editar Team</button></a>

        <form action="{{ route('teams.destroy', $team) }}" method="post">
            @csrf
            @method('delete')
            <button>Eliminar</button>
        </form>
      </div>
    </body>

    </html>
@endsection
