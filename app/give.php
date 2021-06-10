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
<<<<<<< HEAD
}
=======
}
>>>>>>> 03be68e9caba48fcf65250246fa5624fc968c925
