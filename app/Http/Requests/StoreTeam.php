<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'name' => 'required|string|min:5',
        'coach'=>'required||string|min:7',
        'stadium'=>'required|string|min:5',
        'players'=>'required|integer|min:9',
        'established_year'=>'required|date_format:Y|gte:1900',
        ];
    }
    public function attributes(){
        return['name' =>'Nombre de equipo',
                'coach' => 'Entrenador',
                ];
    }
    
    public function messages()
    {
      return [
        'established_year' => 'El año debe ser superior a 1900',

      ];  
    }
}
