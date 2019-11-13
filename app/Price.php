<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    protected $fillable = ['category','date_from','date_to','price','party_room_id'];
    protected $dates=['date_from','date_to'];
    function party_room(){
        return $this->belongsTo(Party_room::class,'party_room_id');
    }
}
