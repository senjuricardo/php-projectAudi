<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function player()
    {
        return $this->hasOne('App\Player');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
