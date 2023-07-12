@extends('layouts.plantilla')


@section('title', 'Create')
@section('content')
    @vite('resources/css/app.css')



    <x-app-layout>
        <x-slot name="header">
            <x-primary-button type="submit">
                <a href="{{ route('teams.index') }}">Go Back</a>
            </x-primary-button>
        </x-slot>
        <div class="py-4">

            <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8 ">
                <div class="container mx-auto px-6 py-2">
                    <!--Form-->
                    <form action="{{ route('teams.create') }}" method="POST"
                    class="w-full max-w-sm mx-auto bg-white p-2 rounded-md shadow-md shadow-indigo-700 border-yellow-500  border-[20px]  border-double">
                    @csrf
                    @method('put')
                    <div class="flex justify-center   ">
                      <a href="{{route('teams.index')}}" class="">
                    <x-application-logo class="w-full sm:w-24 md:w-32 lg:w-32 "></x-application-logo>
                  </a>
                  </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="name">Equipo</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="text" id="name" name="name" 
                            value="{{ old('name') }}">
                        @error('name')
                            <small>*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1">Coach</label>
                        <input
                            class="w-full px-3 py-1 borderborder border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="text" name="coach"  value="{{ old('coach') }}">
                        @error('coach')
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1" for="password">Stadium</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="text" id="stadium" name="stadium" 
                            value="{{ old('stadium') }}">
                        @error('stadium')
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-2" for="confirm-password">Players</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="players" name="players"  value="{{ old('players') }}">
                        @error('players')
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-2" for="confirm-password">Established
                            year</label>
                        <input
                            class="w-full px-2 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="players" name="established_year" placeholder="1990"
                            value="{{old('established_year') }}">
                        @error('established_year')
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                    <x-primary-button
                        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                        type="submit">Register</x-primary-button>



                </form>
        
                </div>
            </div>
        </div>
    </x-app-layout>


@endsection
