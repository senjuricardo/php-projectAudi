<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function cars()
    {
        return $this->hasMany('App\Car');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }
}
