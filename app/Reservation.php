<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded=[];
    protected $dates=['date_from','date_to'];

    function user(){
        return $this->belongsTo(User::class);
    }
    function party_room(){
        return $this->belongsTo(Party_room::class);
    }
    function weddingType(){
        return $this->belongsTo(WeedingType::class,'wedding_type_id');
    }

    public static function new($request){


        $reservation = Reservation::create([
            'user_id' => auth()->user()->id,
            'reserver_name' => auth()->user()->first_name.' '.auth()->user()->last_name,
            'party_room_id' => $request->party_room_id,
            'wedding_type_id' => $request->wedding_type_id,
            'date_from' => $request->date_from,
            'payment_method' => $request->payment_method,
            'price' => $request->price,
        ]);
        return $reservation;
    }

    public static function OwnerNew($request){
        $reservation = Reservation::create([
            'reserver_name' => $request->reserver_name,
            'party_room_id' => $request->party_room_id,
            'wedding_type_id' => $request->wedding_type_id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'status' => 'approuved'
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
        if (Reservation::where('status','approuved')->count() == 0 )
            return 0;
        return (Reservation::where('status','approuved')->count())/Reservation::all()->count()*100;
    }

    public function status(){
        switch ($this->status) {
            case 'approuved':
                echo '<label class="label label-success">مؤكـــــد</label>';
                break;
            case 'disapproved':
                echo '<label class="label label-danger">غيـر مؤكـد </label>';
                break;
            case 'draft':
                echo '<label class="label label-warning">قيد المعالجة</label>';
                break;

            default:
                break;
        }
    }

    public function ApproximateDateReservation($test_date){
        $date = new Carbon($test_date);
        $inf_limit = $date->subDays(10);
        $max_limit = $date->addDays(10);
        if ($this->date_from->between($inf_limit,$max_limit)){
            return true;
        }
    }
}
