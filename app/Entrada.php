<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = [
        'nombre',
        'adultQuantity', 
        'childrenQuantity', 
        'tourType',
        'total'
    ];
    protected $table = 'entradas';

}
