<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeam;
use App\Models\Team;



use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
         
        $teams = Team::paginate();

        return view('teams.index', compact('teams'));
    }

    public function create(){

        return view('teams.create');
    }

    public function show(Team $team){
        return view('teams.show', compact('team'));

    }
    public function edit(Team $team){
        return view('teams.edit', compact('team'));
    }
    public function store(StoreTeam $request){
        $team = Team::create($request->all());

        return redirect()->route('teams.show', $team);
    }
    public function update(Request $request, Team $team){
        $team->update($request->all());

        return redirect()->route('teams.show', $team);

    }
    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('team.index');
    }
}
