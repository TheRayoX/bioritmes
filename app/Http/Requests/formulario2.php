<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formulario2 extends FormRequest
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
            'fechaNacimiento'=> 'required|date|date_format:Y-m-d|before:today',
            'fechaSistema' =>'required|date|date_format:Y-m-d|after:today'
        ];
    }

    public function messages(){
        return[
            'fechaNacimiento.required'=>'El campo Fecha Nacimiento es obligatorio.',
            'fechaNacimiento.date'=>'Formato no válido.',
            'fechaNacimiento.date_format'=>'Formato de la Fecha Nacimiento no válido.',
            'fechaNacimiento.before'=>'La Fecha Nacimiento no puede ser superior al día de hoy.',
            'fechaSistema.required'=>'El campo Fecha es obligatorio.',
            'fechaSistema.date'=>'Formato no válido.',
            'fechaSistema.date_format'=>'Formato de la fecha no válido.',
            'fechaSistema.after'=>'La Fecha no puede ser inferior al día de hoy.',
        ];
    }
}
