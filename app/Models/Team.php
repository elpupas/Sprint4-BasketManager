<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    //relaccion inversa con model User
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //relacion uno a muchos con Modelo Game
    public function games(){
        return $this->hasMany(Team::class, 'home_team');
    }
    public function oponent(){
        return $this->hasMany(Team::class, 'visitor_team');
    }
}
