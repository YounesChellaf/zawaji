<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Party_room extends Model
{
    protected $fillable = ['name','description','logo','phone_number','images','video','email','number_room','total_capacity',
        'capacity_men_room','capacity_women_room','city','location'];

    function prices(){
        return $this->hasMany('App\Price');
    }

    function reservations(){
        return $this->hasMany('App\Reservation');
    }

    public static function new(Request $request){
        if ($request->post()){
            $party_room = Party_room::create([
                'name' => $request->name,
                'city' => $request->city,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'description' => $request->description,
                'location' => $request->location,
                'number_room' => $request->number_room,
                'total_capacity' => $request->total_capacity,
                'capacity_men_room' => $request->capacity_men_room,
                'capacity_women_room' => $request->capacity_women_room,
            ]);
            return  $party_room;
        }
    }
}
