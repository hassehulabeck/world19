<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function homeTeam () {
        return $this->hasMany('App\Team', 'id', 'home_team');
    }
    public function awayTeam () {
        return $this->hasMany('App\Team', 'id', 'away_team');
    }
}
