<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players() {
        return $this->hasMany('App\Player');
    }
    public function entries() {
        return $this->hasMany('App\Entry', 'pick_id')->where('isPlayer', 0);
    }
    public function matches() {
        return $this->hasMany('App\Match');
    }
}
