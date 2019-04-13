<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Party_room extends Model
{
    protected $fillable = ['name','description','restaurent','kitchen','parcking','theatre','logo','phone_number','images','video','email','number_room','total_capacity',
        'capacity_men_room','capacity_women_room','city','location'];

    function prices(){
        return $this->hasMany('App\Price');
    }

    function reservations(){
        return $this->hasMany('App\Reservation');
    }
    function  image(){
        return $this->hasMany('App\Image');
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
                'kitchen' => $request->kitchen,
                'theatre' => $request->theatre,
                'restaurent' => $request->restaurent,
                'parcking' => $request->parcking,
            ]);
            return  $party_room;
        }
    }
}
