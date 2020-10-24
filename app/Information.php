<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{

    protected $table = 'information';
    protected $fillable = ['name',  'image', 'url'];

    public function imageinformation()
    {
        return $this->hasMany('App\Imginformation');
    }

}
