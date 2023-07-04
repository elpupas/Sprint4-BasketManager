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
        'name' => 'required|min:5',
        'coach'=>'required|min:5',
        'stadium'=>'required|min:5',
        'players'=>'required, max:55',
        'establihed_year'=>'required'
        ];
    }
    public function attributes(){
        return['name' =>'Nombre de equipo'];
    }
}
