<?php

namespace App\Http\Controllers;
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

    public function edit(){

    }
    public function store(){

    }

    public function update(){

    }
}
