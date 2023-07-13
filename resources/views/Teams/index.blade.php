@extends('layouts.plantilla')
@section('title', 'Team')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--<h1>Todos los equipos</h1>-->

@auth
    

    <!-- component -->
    <x-app-layout class="">
        <x-slot name="header">
            <div class=" justify-end sm:justify-end md:justify-end items-center">
                <x-primary-button
                type="submit"
               >
                <a href="{{route('teams.create')}}">Create Team</a>
            </x-primary-button>
        
        

            </div>
         
          
        </x-slot>
        <div class="mx-8 mt-10 ">
           
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 text-center">
               
                <!-- Show Teams -->
                @foreach ($teams as $team)
                    <a href="{{ route('teams.show', $team->id) }}" class=" font-bold hover:text-purple-900">
                        <div class="bg-purple-700 shadow-lg shadow-yellow-700    border-[32px] border-double  rounded-lg p-4">
                            <x-application-logo class=" mb-2">
                            </x-application-logo>

                            <div class="text-center mb-3">
                                <h2 class="text-2x1 font-bold text-yellow-400 hover:text-yellow-200 sm:text-sm md:text-sm xl:text-xs">
                                    {{ Str::limit(Str::upper($team->name), 7) }}</h2>
                            </div>
                            <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                <span class="font-bold text-black ">Coach:</span>
                                <div>  {{ $team->coach }}</div>
                            </div>
                          
                            <div class="text-sm mb-2  text-yellow-400 hover:text-yellow-500">
                                <span class="font-bold text-black">Stadium:</span>
                                <div> {{ $team->stadium }}</div>
                            </div>
                            <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                <span class="font-semibold text-black">Players:</span>
                                <div>{{ $team->players }}</div>
                            </div>
                            <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                <span class="font-semibold text-black">Established Year:</span> 
                                <div>{{ $team->established_year }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>


  

    </x-app-layout>


    {{ $teams->links() }}



    @endauth
@endsection
