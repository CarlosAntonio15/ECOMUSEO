<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class giveRequest extends FormRequest
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
            'name'=>'required',
            'lastname'=>'required', 
            'donationType'=>'required',
            'quantity'=>'required', 
            'description'=>'required',
            'currentDate'=>'required',
            'phone'=>'required', 
            'mail'=>'required'

        ];
    }
}