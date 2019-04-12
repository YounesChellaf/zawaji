<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class Image extends Model
{
    function room_party(){
        return $this->belongsTo('App\Party_room');
    }
    public static function new(Request $request,Integer $id){

        Image::create([

        ]);
    }
}
