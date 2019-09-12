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
}
