<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['id',
    'name',
    'lastName',
    'donationType',
    'quantity',
    'idescriptiond',
    'currentDate',
    'phone',
    'mail' ];

    // public function Income()
    // {
    //  return $this->belongsTo('App\Income');
    // }

    protected $table = 'donation';
}
