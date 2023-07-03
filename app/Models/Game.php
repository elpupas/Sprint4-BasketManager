<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];
//relacion inversa con modelo Team
    public function localTeam(){
        return $this->belongsTo(Team::class, 'home_team');
    }
    //relacion inversa con modelo Game
    public function visitorGames() {
        return $this->belongsTo(Game::class,'visitor_team');
    }

}
