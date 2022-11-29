<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class validadorDiario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request
     * @return bool
     */
    public function authorize()
    {
        /*originalmente estaba en false, debemos ponerlo 
        en true para que se acepte el envio del formulario*/
        return true; 
    }

    /**
     * Get the validation rules that apply to the request
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /*añadimos los nombres que le asignamos a los input 
            del archivo ingresar.blade.php*/
            'txtTitulo' => 'required',
            'txtRecuerdo' => 'required'
        ];
    }
}
