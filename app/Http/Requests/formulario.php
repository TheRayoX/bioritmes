<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class formulario extends FormRequest
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
        'nombre'=>'required',
        'fechaNacimiento'=>'required'
        ];
    }
    public function messages()
    {
        return[
        'nombre.required'=>'El campo nombre es obligatorio',
        'fechaNacimiento.required'=>'El campo fecha de nacimiento es obligatorio'
         ];
    }
   
}
