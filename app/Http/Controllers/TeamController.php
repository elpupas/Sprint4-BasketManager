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
        //vincular id de user al campo user_id
        $request->merge(['user_id' => $request->user()->id]);
        $team = Team::create($request->all());
      /*  $team = new Team();
        $team->name = $request->name;
        $team->coach = $request->coach;
        $team->arena = $request->arena;
        $team->players = $request->players;
        $team->established_year = $request->established_year;
        */
     //  $user_id = Auth::id();
     //  $team->user_id = $user_id;
      //  $team->save();
        return redirect()->route('teams.show', $team);
    }
    public function update(Request $request, Team $team){
        $request->validate(
            [
                'name' => 'required|min:5',
                'coach'=>'required|min:5',
                'stadium'=>'required|min:5',
                'players'=>'required, max:55',
                'establihed_year'=>'required',

            ]
        );
        $team->update($request->all());

        return redirect()->route('teams.show', $team);

    }
    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('team.index');
    }
}
