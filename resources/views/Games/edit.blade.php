@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')

@endsection
@auth


<!--Component-->
<x-app-layout>
    <x-slot name="header">
        <x-primary-button type="submit">
            <a href="{{ route('games.show', $game) }}">{{__('Go Back')}}</a>
        </x-primary-button>
    </x-slot>
    <div class="py-10">

        <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8 ">

            <div class="container mx-auto px-6 py-2">
                <!--Form-->
                <form action="{{ route('games.update', $game) }}" method="POST"
                    class="w-full max-w-sm mx-auto bg-white p-2 rounded-md shadow-md shadow-indigo-700 border-yellow-500  border-[20px]  border-double">
                    @csrf
                    @method('put')
                    <div class="flex justify-center   ">
                        <a href="{{ route('games.index') }}" class="">
                            <x-application-logo class="w-full sm:w-24 md:w-32 lg:w-32 "></x-application-logo>
                        </a>
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="home_team">{{__('Local Team')}}
                        </label>
                        <select name="home_team"
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500 hover:bg-yellow-500">
                            @foreach ($teams as $team)
                                @if ($team->user_id === Auth::user()->id)
                                    <option value="{{ $team->id }}" class="bg-white">{{ Str::ucfirst($team->name) }}
                                    </option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="visitor_team">{{__('Visitor
                            Team')}} </label>
                        <select name="visitor_team"
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500  hover:bg-purple-800 transition-easy-out"
                            read>
                            @foreach ($teams as $team)
                                @if ($team->user_id !== Auth::user()->id)
                                    <option value="{{ $team->id }}" class="bg-white">{{ Str::ucfirst($team->name) }}
                                    </option>
                                @endif
                            @endforeach
                        </select>

                    </div>

                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1" for="stadium">{{__('Stadium')}}</label>

                        <select name="stadium"
                            class="w-full px-3 py-1 borderborder border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500 hover:bg-yellow-500">
                            @foreach ($teams as $team)
                                @if ($team->user_id === Auth::user()->id)
                                    <option value="{{ $team->id }}" class="bg-white font-bold">
                                        {{ Str::ucfirst($team->stadium) }}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="game_date">{{__('Game
                            Date')}}</label>
                        <input
                            class="w-full px-3 py-1 border  border-yellow-400 rounded-md focus:outline-none hover:bg-purple-800 focus:border-yellow-500"
                            type="date" id="game_date" name="game_date" value="{{ $game->game_date }}">

                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="game_time">{{__('Game
                            Time')}}</label>
                        <input
                            class="w-full px-3 py-1 border   border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500 hover:bg-yellow-500"
                            type="time" id="game_time" name="game_time" value="{{ $game->game_time }}">

                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="score_home">{{__('Score
                            Home')}}</label>
                        <input
                            class="w-full px-3 py-1 border  border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500 hover:bg-purple-800"
                            type="number" id="score_home" name="score_home" value="{{ $game->score_home }}">

                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="score_visitor">{{__('Score
                            Visitor')}}</label>
                        <input
                            class="w-full px-3 py-1 border hover:bg-yellow-500 border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="score_visitor" name="score_visitor" value="{{ $game->score_visitor }}">

                    </div>
                    <div class="mb-2 w-full">
                        <label for="" class="block text-purple-800 text-base font-semibold mb-1 "
                            for="game_status">{{__('Status')}}</label>
                        <select name="game_status"
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none bg-purple-800 text-white hover:bg-purple-800 focus:border-yellow-500">

                            <option value="win">{{__('Win')}}</option>
                            <option value="lose" class="">{{__('Lose')}}</option>
                            <option value="draw "class="bg-yellow-500">{{__('Draw')}}</option>
                            <option value="comin">{{__('coming soon')}}</option>
                        </select>

                    </div>
                    <x-primary-button
                        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                        >{{__('Update')}}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
@endauth
