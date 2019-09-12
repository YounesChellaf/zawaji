<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['name','email','subject','message'];

    public static function new($request){
        return Message::create($request->all());
    }



}
