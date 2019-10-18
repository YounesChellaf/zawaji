<?php

namespace App;

use App\Permissions\HasPermissionsTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
//    use HasPermissionsTrait;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function invitation(){
        return $this->hasMany(Invitation::class);
    }

    function reservations(){
        return $this->hasMany(Reservation::class);
    }
    function party_room(){
        return $this->belongsTo(Party_room::class);
    }



    public function active(){
        switch ($this->active) {
            case true:
                echo '<label class="label label-success">فعـــــال</label>';
                break;
            case false:
                echo '<label class="label label-danger">محظـــــور</label>';
                break;
            default:
                // code...
                break;
        }
    }
}
