<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team() {
        return $this->belongsTo('App\Team');
    }
    public function entries() {
        return $this->hasMany('App\Entry', 'pick_id');
    }
}
