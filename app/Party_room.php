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

    function owner(){
        return $this->hasOne(User::class,'owner_id');
    }

    function reservations(){
        return $this->hasMany('App\Reservation');
    }
    function  image(){
        return $this->hasMany('App\Image');
    }

    public function status(){
        switch ($this->status) {
            case 'approved':
                echo '<label class="label label-success">مؤكـــــدة</label>';
                break;

            case 'disapproved':
                echo '<label class="label label-danger">غيـر مؤكـدة </label>';
                break;
            case 'banned':
                echo '<label class="label label-danger">محظــــــور</label>';
                break;

            default:
                break;
        }
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
            for($i=1;$i<5;$i++){
                $photo = $request->file('image'.$i);
                $destpath = 'assets/images/party_room';
                $file_name = $photo->getClientOriginalName();
                $photo->move($destpath,$file_name);
                $image = Image::create([
                    'party_room_id' => $party_room->id,
                    'path' => $file_name
                ]);
            }
            for($i=1;$i<4;$i++){
                $price = Price::create([
                    'party_room_id' => $party_room->id,
                    'price' => $request->input('price'.$i),
                    'date_from' => $request->input('fromdate'.$i),
                    'date_to' => $request->input('todate'.$i),
                ]);
            }
            return $party_room;
        }
    }
}
