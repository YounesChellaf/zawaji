<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Party_room extends Model
{
   // protected $appends=['isReserved'];
    protected $guarded=[];
    public function city(){
        return $this->belongsTo(City::class);
    }
    function prices(){
        return $this->hasMany(Price::class);
    }

    function owner(){
        return $this->belongsTo(User::class);
    }

    function reservations(){
        return $this->hasMany(Reservation::class);
    }
    function  image(){
        return $this->hasMany(Image::class);
    }

    public function status(){
        switch ($this->status) {
            case 'approved':
                echo '<label class="label label-success">مؤكـــــدة</label>';
                break;

            case 'disapproved':
                echo '<label class="label label-warning">غيـر مؤكـدة </label>';
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
            //dd(array_merge($request->price,$request->fromdate,$request->todate));
            $party_room = Party_room::create([
                'owner_id' => Auth::user()->id,
                'name' => $request->name,
                'city_id' => $request->city_id,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'description' => $request->description,
                'type' => $request->type,
                'location' => $request->location,
                'total_capacity' => $request->total_capacity,
                'capacity_men_room' => $request->capacity_men_room,
                'capacity_women_room' => $request->capacity_women_room,
                'kitchen' => $request->kitchen ? true :false,
                'theatre' => $request->theatre ? true :false,
                'jardin' => $request->jardin ? true :false,
                'auditorium' => $request->auditorium ? true :false,
                'parcking' => $request->parcking ? true :false,
                'wifi' => $request->wifi ? true :false,
            ]);
            foreach ($request->file('image') as $photo){
                $destpath = 'assets/images/party_room';
                $file_name = str_replace(' ', '', $photo->getClientOriginalName());
                $photo->move($destpath,$file_name);
                $image = Image::create([
                    'party_room_id' => $party_room->id,
                    'path' => $file_name
                ]);
            }
            }
            foreach ($request->price as $price ){
            $i=0;
                $price = Price::create([
                    'party_room_id' => $party_room->id,
                    'price' => $price,
                    'date_from' => $request->fromdate[$i],
                    'date_to' => $request->todate[$i],
                ]);
                $i++;
            }
            return $party_room;
        }

        public function getPrice(){
        $current_date = Carbon::now();
        foreach ($this->prices as $price){
            if ($current_date->between($price->date_from,$price->date_to)){
                return $price->price;
            }
        }
            return $price->price;
        }
        public static function getRoom(){
             return Party_room::where('status','approved')->get();
        }

        public static function room_service($service){
        if ($service)
        {
            echo '<label class="label label-success">متوفـــــر</label>';

        }
         else {
             echo '<label class="label label-danger">غيـر متوفـــــر</label>';
         }
        }

       public static function getIsReserved($id,$from = null,$to =null){
        $room = Party_room::find($id);
        $date_from =  new Carbon($from);
        $date_to =  new Carbon($to);
        foreach ($room->reservations as $reservation){
            if ($reservation->date_from->between($date_from,$date_to))
                return false;
        }
        return true;
       }
}
