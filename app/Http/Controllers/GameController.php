<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGame;
use App\Models\Game;
use App\Models\Team;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index(){
    
           $user= Auth::user();
          $team = $user->teams->first();
           $games = Game::orderby('home_team', 'asc')->paginate(6);
          
    
   
       return view('games.index', compact('games', 'team'));

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
