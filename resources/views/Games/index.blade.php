
@section('title', 'Games')
@section('content')

@endsection
    <!--Components-->
    <x-app-layout>
    
            <x-slot name="header">
                <div class=" justify-end sm:justify-end md:justify-end">
                    <!--Button-->
                    <x-primary-button type="button"
                        class="border border-indigo-500 bg-indigo-700 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                        <a href="{{ route('games.create', $team) }}">Create Game</a>
                    </x-primary-button>
                </div>
            </x-slot>
            <div class="mx-10 mt-10">
                <!--Grid-->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
                    <!-- Show games -->
                    
                    @foreach ($games as $game)
                    
                        
                    
                        <a href="{{ route('games.show', $game) }}" class=" hover:text-purple-900">
                            <div class="bg-purple-800 shadow-lg shadow-yellow-600   rounded-[127px 10px 193px 10px] border-[32px] border-double border-#531a p-4">

                                <div class="text-center mb-4">
                                    <h3
                                        class="text-3x1 font-bold text-yellow-400 hover:text-yellow-500 sm:text-x1 md:text-lg lg:text-4x1">
                                        Games</h3>
                                </div>
                                <div class="text-center mb-4 text-yellow-400 hover:text-yellow-500">
                                <span class="font-semibold text-black ">Local:</span> {{Str::limit(Str::upper($game->localTeam->name ), 9)}}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-semibold text-black">Visitor:</span> {{ $game->visitorGames->name}}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-bold text-black">Stadium:</span> {{ $game->stadium }}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-semibold text-black">Date:</span> {{ $game->game_date }}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-semibold text-black">Time</span> {{ $game->game_time }}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-semibold text-black">Status</span> {{ $game->game_status }}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-semibold text-black">Home Score</span> {{ $game->score_home }}
                                </div>
                                <div class="text-sm mb-2 text-yellow-400 hover:text-yellow-500">
                                    <span class="font-semibold text-black">Visitor Score</span> {{ $game->score_visitor }}
                                </div>
                            </div>
                        </a>
                       
                    @endforeach
                </div>
            </div>
    </x-app-layout>
    {{$games->links()}}


