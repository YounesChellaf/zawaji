<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class Image extends Model
{
    protected $fillable=['path','party_room_id'];

    function room_party(){
        return $this->belongsTo('App\Party_room');
    }
}
