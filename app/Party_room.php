<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party_room extends Model
{
    protected $fillable = ['name','description','logo','images','video','email','number_room','total_capacity',
        'capacity_men_room','capacity_women_room','city','location'];

    function prices(){
        return $this->hasMany('App\Price');
    }

    function reservations(){
        return $this->hasMany('App\Reservation');
    }
}
