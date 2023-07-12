@extends('layouts.plantilla')
@section('title', 'Show Game')


<x-app-layout>
    <x-slot name="header">
        <div class="flex space-x-14  justify-center ">

            <x-primary-button type="button"
                class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                @if ($game->home_team)
                    <a href="{{ route('games.edit', $game) }}">Edit Game</a>
                @else
                    Edit Game
                @endif
            </x-primary-button>


            <x-primary-button type="submit"
                class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                <a href="{{ route('games.create', $game) }}">Create Game</a>
            </x-primary-button>

            <div>
                <form action="{{ route('games.destroy', $game) }}" method="post">
                    @csrf
                    @method('delete')
                    <x-danger-button type="submit">
                        Delete Game
                    </x-danger-button>
                </form>
            </div>
        </div>
    </x-slot>
    <div class="py-14">

        <div class="max-w-6xl mx-auto px-2 sm:px-2 md:px-4 lg:px-5 ">
            <div class="flex justify-center mb-8  bg-repeat">
                <a href="{{ route('games.index') }}"><img src="{{ asset('images/lakers.svg') }}" alt="Mi SVG"
                        class="w-52 h-32">
                </a>
            </div>


            <div class="w-full overflow-x-auto">
                <table class="min-w-full divide-y divide-purple-700">
                    <thead class="bg-yellow-400 text-center">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3  text-sm  text-purple-800 font-bold uppercase tracking-wider">Home Team
                            </th>
                            <th scope="col"
                                class="px-6 py-3  text-sm font-bold text-purple-800 uppercase tracking-wider">Visitor
                                Team</th>
                            <th scope="col"
                                class="px-6 py-3  text-sm font-bold text-purple-800 uppercase tracking-wider">Stadium
                            </th>
                            <th scope="col"
                                class="px-6 py-3  text-sm font-bold text-purple-800 uppercase tracking-wider">Date</th>
                            <th scope="col"
                                class="px-6 py-3  text-sm font-bold text-purple-800 uppercase tracking-wider">Time</th>
                            <th scope="col"
                                class="px-6 py-3  text-sm font-bold text-purple-800 uppercase tracking-wider">Score</th>
                            <th scope="col"
                                class="px-6 py-3  text-sm font-bold text-purple-800 uppercase tracking-wider">Status
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-yellow-200">

                        <tr class="hover:bg-purple-100 text-center">
                            <td class="px-6 py-4 whitespace-nowrap text-purple-700 font-bold ">
                                {{ $game->localTeam->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $game->visitorGames->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $game->localTeam->stadium }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $game->game_date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $game->game_time }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="text-green-600 font-bold">{{ $game->score_home }}</span> -
                                <span class="text-red-600 font-bold">{{ $game->score_visitor }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $game->game_status }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
