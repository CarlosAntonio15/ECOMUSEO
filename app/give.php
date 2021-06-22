<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class give extends Model
{
    protected $fillable = [

        'id', 'name',
        'lastname', 'donationType',
        'quantity', 'description',
        'currentDate','phone', 'mail'

    ];

    protected $table = 'gives';
}
