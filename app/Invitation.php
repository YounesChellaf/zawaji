<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    //
    protected $fillable =[ 'inviter_id','slogan','party_room','location','date','time','broadcast','destination',];

    public function inviter(){
        return $this->belongsTo(User::class, 'inviter_id');
    }
    public static function new($request){
        return invitation::create($request->all());
    }
    public static function editer($request, $id){
        $invitation = invitation::find(id);
        $invitation->slogan = $request->inviter_id;
        $invitation->slogan = $request->slogan;
        $invitation->party_room = $request->party_room;
        $invitation->location = $request->location;
        $invitation->date = $request->date;
        $invitation->time = $request->time;
        $invitation->broadcast = $request->broadcast;
        $invitation->destination = $request->destination;
        $invitation->save();
        return $invitation;
    }
}
