<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded=[];

    function user(){
        return $this->belongsTo('App\User');
    }
    function party_room(){
        return $this->belongsTo('App\Party_room');
    }
    function weddingType(){
        return $this->belongsTo(WeedingType::class,'wedding_type_id');
    }
}
