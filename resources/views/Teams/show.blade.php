@extends('layouts.plantilla')
@section('title', 'Show')
@section('content')





    <x-app-layout>
        <x-slot name="header">
            <div class="flex space-x-14  justify-center ">
                <x-primary-button type="button"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    <a href="{{ route('teams.edit', $team) }}">Edit Team</a>
                    </x-primary-button>
                    <x-primary-button type="submit"
                        class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                          <a href="{{ route('games.create', $team) }}">Create Game</a>
                    </x-primary-button>

                    <div>
                        <form action="{{ route('teams.destroy', $team) }}" method="post">
                            @csrf
                            @method('delete')
                            <x-danger-button type="submit">
                                Delete Team
                            </x-danger-button>
                        </form>
                    </div>
            </div>

        </x-slot>


        <div class="py-2">

            <div class="max-w-5xl mx-auto px-2 sm:px-2 md:px-3 lg:px-4 ">
                <div
                    class="bg-purple-800 shadow-lg rounded-lg text-center mt-10  s shadow-yellow-700   rounded-[127px 10px 193px 10px] border-[32px] border-double border-#531a  p-4 ">
                    <div class="flex justify-center mt-4">
                        <a href="{{route('teams.index')}}" class="">
                    <x-application-logo class="w-full sm:w-24 md:w-32 lg:w-42"></x-application-logo>
                        </a>
                </div>
                    <div class="text-center mb-2">
                        <h1 class="text-4xl font-bold text-yellow-500 hover:text-yellow-200 lg:text-4xl  transition ease-in-out duration-180">
                            {{Str::upper($team->name)  }}
                        </h1>
                    </div>

                    <div class="  mb-2">
                        <span class="font-bold text-base sm:text-lg lg:text-2xl">Coach:</span>
                        <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200  transition ease-in-out duration-150"> {{ Str::ucfirst($team->coach) }}</div>
                    </div>

                    <div class="text-sm mb-2">
                        <span class="font-bold text-base sm:text-lg lg:text-2xl">Stadium:</span>
                        <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200"> {{  Str::ucfirst($team->stadium) }}</div>
                    </div>
                    <div class="text-sm mb-2">
                        <span class="font-bold text-base sm:text-lg lg:text-2xl">Players:</span>
                        <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200"> {{ $team->players }}</div>

                    </div>
                    <div class="text-sm mb-2">
                        <span class="font-bold text-base sm:text-lg lg:text-2xl">Established Year:</span>
                        <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200"> {{ $team->established_year }}
                        </div>

                    </div>
                </div>

    </x-app-layout>




@endsection
