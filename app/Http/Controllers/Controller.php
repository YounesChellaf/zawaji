<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public static function assignRole(){
        $role = Role::find(1);
        $permission = Permission::find(1);
        auth()->user()->givePermissionTo('edit','web');
        return response([
           'user' => 'il a affecter par ce role'
        ]);
    }
}
