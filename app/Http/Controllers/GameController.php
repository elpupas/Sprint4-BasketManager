<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGame;
use App\Models\Game;
use App\Models\Team;




use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
       $games = Game::paginate();
       return view('games.index', compact('games'));

    }
    
    public function show(Game $game){
        return view('games.show', compact('game'));

    }

    public function create($team){

        $teams = Team::all();

        return view('games.create', compact('teams', 'team'));

    }

    public function edit(Game $game){
        $teams = Team::all();	
        return view('games.edit', compact('game', 'teams'));

    }
    public function store(StoreGame $request ){
        $game = Game::create($request->all());


        return redirect()->route('games.show', $game);

    }

    public function update(Request $request, Game $game){
        $game->update($request->all());

        return redirect()->route('games.show', $game);


    }
    public function destroy(Game $game){
        $game->delete();
        return redirect()->route('games.index');
    }
}
