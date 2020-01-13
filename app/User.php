<?php

namespace App;

use App\Permissions\HasPermissionsTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
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
        return $this->hasMany(Party_room::class,'owner_id');
    }

    function image(){
        return $this->belongsTo(Image::class);
    }


    public  function getReservation(){
        $reservations = collect();
        if ($this->party_room)
            foreach ($this->party_room as $room){
            $reservations->push($room->reservations);
            }
        return $reservations;
    }

    public function status(){
        switch ($this->status) {
            case 'approved':
                echo '<label class="label label-success">مفــــعل </label>';
                break;

            case 'disapproved':
                echo '<label class="label label-warning">غيـر مفــــعل بعد </label>';
                break;
            case 'banned':
                echo '<label class="label label-danger">محظــــــور</label>';
                break;

            default:
                break;
        }
    }
}
