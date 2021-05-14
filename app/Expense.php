<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    
    protected $fillable = ['id','date', 'voucher', 'description','responsable', 'amount'];

    /*
    
    public function Usuario()
    {
     return $this->belongsTo('App\Usuario');
     
    }*/
}