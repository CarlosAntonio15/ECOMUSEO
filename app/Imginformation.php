<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imginformation extends Model
{
    protected $table = 'img_information';

    protected $fillable = ['name', 'format', 'id_information'];

    public function information()
    {
     return $this->belongsTo('App\Information');
    }
}
