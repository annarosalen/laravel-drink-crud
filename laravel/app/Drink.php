<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [

        'name',
        'abv',
        'price'

    ];
}
