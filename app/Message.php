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

    public function status(){
        switch ($this->status) {
            case 'approved':
                echo '<label class="label label-success">مؤكـــــد</label>';
                break;

            case 'disapproved':
                echo '<label class="label label-warning">غيـر مؤكـد </label>';
                break;
            default:
                break;
        }
    }
}
