<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulos'=>'required',
            'descripcion'=>'required', /*SE PREGUNTA, SI EL SERVICIO ELEGIDO TIENE IMAGEN, QUITA LA VALIDACION DE LA IMAGEN SINO( : ) ELIGE UNA IMAGEN PARA REGISTRAR */
            'image'=>[$this->route('servicios') ? 'nullable' : 'required','mimes:png,jpg,jpeg']
        ];
    }

    public function messages(){
        return [
            'titulos.required'=>'Se necesita inrgesar un titulo',
            'descripcion.required'=>'Se necesita ingresar una descripcion',
            'image.required'=>'Necesitas subir una imagen'
        ];
    }
}
