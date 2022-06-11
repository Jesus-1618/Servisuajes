<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class actualizar_contacto extends FormRequest
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
            'nombre' => 'required',
            'departamento' => 'required',
            'correo' => 'required',
            'celular' => 'required',
            'telefono' => 'required',
        ];
    }
}
