<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['category','date_from','date_to','price','party_room'];

    function party_room(){
        return $this->belongsTo('App\Party_room');
    }
}
