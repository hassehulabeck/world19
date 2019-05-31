<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function team() {
        return $this->belongsTo('App\Team', 'pick_id');
    }
    public function player() {
        return $this->belongsTo('App\Player', 'pick_id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

}
