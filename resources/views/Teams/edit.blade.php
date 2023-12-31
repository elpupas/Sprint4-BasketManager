
@extends('layouts.plantilla')
@section('title', 'Edit')
@section('content')

@endsection

 <!--Components-->
 @auth


    <x-app-layout>
        <x-slot name="header">
            <x-primary-button type="button">
                <a href="{{ route('teams.show', $team) }}">{{__('Go Back')}}</a>
            </x-primary-button>
        </x-slot>
      <div class="py-4">

        <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-4 lg:px-8 ">

                <!--Form-->

                <form action="{{ route('teams.update', $team) }}" method="POST"
                    class="w-full max-w-sm mx-auto bg-white p-2 rounded-md shadow-md shadow-indigo-700 border-yellow-500  border-[20px]  border-double">
                    @csrf
                    @method('put')
                    <div class="flex justify-center   ">
                      <a href="{{route('teams.index')}}" class="">
                    <x-application-logo class="w-full sm:w-24 md:w-32 lg:w-32 "></x-application-logo>
                  </a>
                  </div>
                    <div class="mb-2 w-full">

                        <label class="block text-purple-800 text-base font-semibold mb-1" for="name">{{__('Team')}}</label>
                        <input
                            class="w-full px-3 py-2 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="text" id="name" name="name"
                            value="{{  $team->name }}">



                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1">{{__('Coach')}}</label>
                        <input
                            class="w-full px-3 py-2 borderborder border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="text" name="coach"  value="{{ $team->coach }}">


                    </div>
                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1" for="password">{{__('Stadium')}}</label>
                        <input
                            class="w-full px-3 py-2 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="text" id="stadium" name="stadium"
                            value="{{ $team->stadium }}">

                    </div>
                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1" for="confirm-password">{{__('Players')}}</label>
                        <input
                            class="w-full px-3 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="players" name="players"  value="{{ $team->players }}">

                    </div>
                    <div class="mb-2">
                        <label class="block text-purple-800 text-base font-bold mb-1" for="confirm-password">{{__('Established
                            year')}}</label>
                        <input
                            class="w-full px-2 py-1 border border-yellow-400 rounded-md focus:outline-none focus:border-yellow-500"
                            type="number" id="players" name="established_year" placeholder="1990"
                            value="{{$team->established_year }}">

                    </div>
                    <x-primary-button
                        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                        type="submit">{{__('Update')}}</x-primary-button>



                </form>

        </div>
    </div>

    </x-app-layout>
    @endauth

