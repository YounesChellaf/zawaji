<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded=[];

    function user(){
        return $this->belongsTo('App\User');
    }
    function party_room(){
        return $this->belongsTo('App\Party_room');
    }
    function weddingType(){
        return $this->belongsTo(WeedingType::class,'wedding_type_id');
    }

    public static function new($request){
        $reservation = Reservation::create([
            'user_id' => auth()->user()->id,
            'party_room_id' => $request->party_room_id,
            'wedding_type_id' => $request->wedding_type_id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
        ]);
        return $reservation;
    }
    public static function editer($request,$id){
        $reservation = Reservation::find($id);
        $reservation->party_room_id = $request->party_room_id;
        $reservation->wedding_type_id = $request->wedding_type_id;
        $reservation->date_from = $request->date_from;
        $reservation->date_to = $request->date_to;
        $reservation->save();
        return $reservation;
    }

    public static function accepted_invitation_rate(){
        if (Reservation::where('status','accepted')->count() == 0 )
            return 0;
        return (Reservation::where('status','accepted')->count())/Reservation::all()->count()*100;
    }
}
