<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voluntary extends Model
{
    protected $fillable =[
        'Nombre',
        'Apellido_1',
        'Apellido_2',
        'Edad',
        'Telefono',
        'Direccion', 
        'Email',
        'Descripcion',
        
    ]; 
    
    protected $table = 'voluntaries';
}