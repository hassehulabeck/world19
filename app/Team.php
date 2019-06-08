<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players() {
        return $this->hasMany('App\Player');
    }
    public function entries() {
        return $this->hasMany('App\Entry', 'id', 'pick_id');
    }
    public function matches() {
        return $this->hasMany('App\Match');
    }
}
