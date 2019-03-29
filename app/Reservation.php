<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['payment','date','user_id','party_room_id'];

    function user(){
        return $this->belongsTo('App\User');
    }
    function party_room(){
        return $this->belongsTo('App\Party_room');
    }
}
