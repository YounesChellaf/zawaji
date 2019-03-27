<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    //
    protected $fillable =[ 'inviter_id','slogan','party_room','location','date','time','broadcast','destination',];
}
