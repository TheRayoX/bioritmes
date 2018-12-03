<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contacto extends FormRequest
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
            'email'=>'required|email|max:255',
            'texto'=>'required'
        ];
    }
    public function messages(){
        return[
            'nombre.required'=>'El campo nombre es obligatorio',
            'email.required'=>'El campo email es obligatorio',
            'texto.required'=>'El campo texto es obligatorio',
            'nombre.max' =>'El campo nombre no puede tener más de 12 carácteres',
            'email.email' =>'El campo email no tiene un formato válido'
        ];
    }
}
