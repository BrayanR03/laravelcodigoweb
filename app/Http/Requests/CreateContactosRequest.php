<?php

namespace App\Http\Requests;
use App\Mail\MensajeRecibido;
use Illuminate\Foundation\Http\FormRequest;

class CreateContactosRequest extends FormRequest
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
            'nombre'=>'required',
            'email'=>'required',
            'asunto'=>'required',
            'mensaje'=>'required'
        ];
    }

    public function messages(){

        return [
            'nombre.required'=>'Necesitas llenar una dato en el campo nombre',
            'email.required'=>'Necesitas llenar un dato en el campo email',
            'asunto.required'=>'Necesitas llenar un dato en el campo asunto',
            'mensaje.required'=>'Necesitas llenar un dato en el campo mensaje'
        ];
    }
}
