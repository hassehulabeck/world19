<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'team_id',
        'player_id'
    ];

    public function user() {
        return $this->hasOne('App\User');
    }
    public function team() {
        return $this->hasOne('App\Team');
    }
    public function player() {
        return $this->hasOne('App\Player');
    }

}
