<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeedingType extends Model
{
    protected $guarded=[];

    function reservation(){
        return $this->hasMany(Reservation::class);
    }

    public static function new($request){
        $wedding =WeedingType::create([
            'name' => $request->name,
            'color' => $request->color,
        ]);
        return $wedding;
    }

    public static function editer($request,$id){
        $type = WeedingType::findOrFail($id);
        $type->name = $request->name;
        $type->color = $request->color;
        $type->save();
        return $type;
    }
}
