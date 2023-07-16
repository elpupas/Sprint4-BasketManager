@extends('layouts.plantilla')
@section('title', 'Show Game')

@auth
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

            <x-danger-button x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-team-deletion')">
            {{__('Delete Team')}}
        </x-danger-button>

        <!--Modal-->
        <x-modal name="confirm-team-deletion" focusable>
            <form method="post" action="{{ route('games.destroy',$game) }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to ') }}
                    <span class="text-white bg-red-500">{{ __('delete') }}</span>
                    {{ __(' this match?') }}
                  </h2>


                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once this match is deleted, all your data will be permanently deleted.') }}
                </p>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ml-3" type="submit">
                        {{ __('Delete Match') }}
                    </x-danger-button>
                </div>

            </form>

        </x-modal>

        </div>
    </x-slot>
    <div class="py-14">

        <div class="max-w-6xl mx-auto px-2 sm:px-2 md:px-4 lg:px-5 ">
            <div class="flex justify-center mb-8 items-center">
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


@endauth
