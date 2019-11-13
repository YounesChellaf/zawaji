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

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public static function new(Request $request){
        if ($request->post()){
            $role =Role::create([
                'name' => $request->name,
                'guard_name' => 'fgfg',
            ]);
            return $role;
        }
    }

    public static function editer($request,$id){
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();
        return $role;
    }
}