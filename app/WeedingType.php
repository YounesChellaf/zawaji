<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeedingType extends Model
{
    protected $guarded=[];

    function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
