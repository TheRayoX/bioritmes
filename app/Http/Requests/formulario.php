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
        'nombre'=>'required|max:12',
        'fechaNacimiento'=>'required|date|date_format:Y-m-d|before:tomorrow'
        ];
    }
    public function messages()
    {
        return[
        'nombre.required'=>'El campo nombre es obligatorio',
        'nombre.max'=>'El campo nombre no puede tener más de 12 carácteres',
        'fechaNacimiento.required'=>'El campo fecha de nacimiento es obligatorio',
        'fechaNacimiento.before' =>'La fecha no puede ser superior al dia de hoy',
        'fechaNacimiento.date' =>'Formato no válido',
        'fechaNacimiento.date_format' =>'Formato de la fecha no válido'


         ];
    }
}
   