<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeam;
use App\Models\Team;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $teams = $user->teams()->orderBy('name', 'asc')->paginate(12);

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
        if(Auth::check()) {
        $request->merge(['user_id' => $request->user()->id]);
        $team = Team::create($request->all());
        return redirect()->route('teams.show', $team);
        }else{
                return redirect()->route('login');
        }
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

    }
    public function update(Request $request, Team $team){
        if(Auth::check()){
       $request->validate(
            [
                'name' => 'required|string|min:5',
                'coach'=>'required||string|min:7',
                'stadium'=>'required|string|min:5',
                'players'=>'required|integer|min:9',
                'established_year'=>'required|date_format:Y|gte:1900'

            ]
        );
        $team->update($request->all());

        return redirect()->route('teams.show', $team);
    }else{
        return redirect()->route('login');
    }

    }
    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('teams.index');
    }
}
