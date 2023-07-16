<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGame extends FormRequest
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
            'visitor_team' => 'required',
            'game_status'=>'required',
            'stadium'=>'required|string',
            'game_date'=>'required',
            'game_time'=>'required',
            'score_home' => 'nullable|integer',
            'score_team' => 'nullable|integer'
            
            
        ];
    }
}
