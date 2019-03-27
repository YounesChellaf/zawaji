<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class party_room extends Model
{
    //
    protected $fillable = ['name','description','logo','images','video','email','number_room','total_capacity','total_price',
        'capacity_men_room','price_men_room','capacity_women_room','price_women_room','city','location','discount'];
}
