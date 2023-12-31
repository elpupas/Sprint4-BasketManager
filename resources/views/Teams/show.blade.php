@extends('layouts.plantilla')
@section('title', 'Show')
@section('content')




    @auth




        <x-app-layout>
            <x-slot name="header">
                <div class="flex space-x-14  justify-center ">

                    <x-primary-button >
                        <a href="{{ route('teams.edit', $team) }}">  {{ __('Edit Team') }} </a>

                    </x-primary-button>


                    <x-primary-button class="button"
                       >
                       <a href="{{ route('games.create', $team) }}">  {{__('Create Game')}} </a>
                    </x-primary-button>



                    <x-danger-button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-team-deletion')">
                        {{__('Delete Team')}}
                    </x-danger-button>

                    <!--Modal-->
                    <x-modal name="confirm-team-deletion" focusable>
                        <form method="post" action="{{ route('teams.destroy',$team) }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Are you sure you want to ') }}
                                <span class="text-white bg-red-500">{{ __('delete') }}</span>
                                {{ __(' this team?') }}
                              </h2>


                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Once your team is deleted, all your matches and data will be permanently deleted.') }}
                            </p>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3" type="submit">
                                    {{ __('Delete Team') }}
                                </x-danger-button>
                            </div>

                        </form>

                    </x-modal>
                </div>
            </x-slot>


            <div class="py-2">
                <div class="max-w-5xl mx-auto px-2 sm:px-2 md:px-3 lg:px-4 ">
                    <div
                        class="bg-purple-800 shadow-lg rounded-lg text-center mt-10  s shadow-yellow-700   rounded-[127px 10px 193px 10px] border-[32px] border-double border-#531a  p-4 ">
                        <div class="flex justify-center mt-4">
                            <a href="{{ route('teams.index') }}" class="">
                                <x-application-logo class="w-full sm:w-24 md:w-32 lg:w-42"></x-application-logo>
                            </a>
                        </div>
                        <div class="text-center mb-2">
                            <h1
                                class="text-4xl font-bold text-yellow-500 hover:text-yellow-200 lg:text-4xl  transition ease-in-out duration-180">
                                {{ Str::upper($team->name) }}
                            </h1>
                        </div>

                        <div class="  mb-2">
                            <span class="font-bold text-base sm:text-lg lg:text-2xl">Coach:</span>
                            <div
                                class="font-bold text-lg  text-yellow-500 hover:text-yellow-200  transition ease-in-out duration-150">
                                {{ Str::ucfirst($team->coach) }}</div>
                        </div>

                        <div class="text-sm mb-2">
                            <span class="font-bold text-base sm:text-lg lg:text-2xl">Stadium:</span>
                            <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200">
                                {{ Str::ucfirst($team->stadium) }}</div>
                        </div>
                        <div class="text-sm mb-2">
                            <span class="font-bold text-base sm:text-lg lg:text-2xl">Players:</span>
                            <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200"> {{ $team->players }}</div>

                        </div>
                        <div class="text-sm mb-2">
                            <span class="font-bold text-base sm:text-lg lg:text-2xl">Established Year:</span>
                            <div class="font-bold text-lg  text-yellow-500 hover:text-yellow-200">
                                {{ $team->established_year }}
                            </div>

                        </div>
                    </div>

        </x-app-layout>


        @endauth


@endsection
