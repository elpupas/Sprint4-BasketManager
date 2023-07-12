@extends('layouts.plantilla')
@section('title', 'Create')
@section('content')



<x-app-layout>
    <!--header-->
    <x-slot name="header">
        <x-primary-button type="submit">
            <a href="{{ route('games.index') }}">Go Back</a>
        </x-primary-button>
    </x-slot>
    <div class="py-2">

        <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8 ">
            <div class="container mx-auto px-6 py-2">
                <!--Form-->
                <form action="{{ route('games.store') }}" method="POST"
                    class="w-full max-w-sm mx-auto bg-white p-2 rounded-md shadow-md shadow-indigo-700 border-yellow-500  border-[20px]  border-double">
                    @csrf
            
                    <div class="flex justify-center   ">
                        <a href="{{ route('games.index') }}" class="">
                            <x-application-logo class="w-full sm:w-24 md:w-32 lg:w-32 "></x-application-logo>
                        </a>
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="home_team">Local Team </label>
                        <select name="home_team" class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500" read>
                            @foreach ($teams as $team)
                                @if ($team->user_id === Auth::user()->id)
                              
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                  
                                @endif
                            @endforeach                    
                        </select>
                       
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="visitor_team">Visitor Team </label>
                        <select name="visitor_team" class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500" read>
                            @foreach ($teams as $team)
                                @if ($team->user_id !== Auth::user()->id)
                              
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                  
                                @endif
                            @endforeach                    
                        </select>
                       
                    </div>

                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1" for="stadium">Stadium</label>
                       
                            <select name="stadium" class="w-full px-3 py-1 borderborder border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500">
                                @foreach ($teams as $team)
                                    @if ($team->user_id === Auth::user()->id)
                                 
                                    <option value="{{ $team->id }}">{{ $team->stadium}}</option>
                                    
                                        
                                    @endif
                                @endforeach                    
                            </select>
                        @error('stadium')
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="game_date">Game Date</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="date" id="game_date" name="game_date" value="">
                        @error('game_date')
                            <small>*{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="game_time">Game Time</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="time" id="game_time" name="game_time" value="">
                        @error('game_time')
                            <small>*{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="score_home">Score Home</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="score_home" name="score_home" value="">
                        @error('score_home')
                            <small>*{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="score_visitor">Score Visitor</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="score_visitor" name="score_visitor" value="}">
                        @error('score_visitor')
                            <small>*{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-2 w-full">
                        <label for="" class="block text-purple--800 text-base fontsemibold mb-1 " for="game_status">Status</label>
                        <select name="game_status" class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500">
                        
                        <option value="win">win</option>
                        <option value="lose">lose</option>
                        <option value="draw">draw</option>
                        <option value="comin">coming soon</option>
                        </select>
                        @error('game_status')
                            <small>*{{ $message }}</small>
                        @enderror
                    
                    </div>
                    <x-primary-button
                    class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                    type="submit">Update</x-primary-button>
                </form>
            </div>


        </div>
    </div>

</x-app-layout>


@endsection




