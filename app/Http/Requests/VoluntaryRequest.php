<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoluntaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'Id'=>'required',
            'Nombre'=>'required',
            'Apellido_1'=>'required', 
            'Apellido_2'=>'required',
            'Edad'=>'required',
            'Telefono'=>'required',
            'Direccion'=>'required',
            'Email'=>'required',
            'Cantidad'=>'required',
            'Descripcion'=>'required'
        ];
    }
}
