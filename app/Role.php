<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Role extends Model
{
    protected $guarded=[];
    //
    public function permissions(){
        return $this->belongsToMany('App\Permission','permissions_roles');
    }

    public static function new(Request $request){
        if ($request->post()){
            $role =Role::create([
                'name' => $request->name,
            ]);
            return $role;
        }
    }
}