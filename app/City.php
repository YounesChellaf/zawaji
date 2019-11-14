<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class City extends Model
{
    protected $guarded=[];
    public static function new(Request $request){
        return City::create([
           'name' => $request->name
        ]);
    }

    public function room(){
        return $this->hasMany(Party_room::class);
    }
}
