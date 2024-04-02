<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMunkafelvevoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Your authorization logic here
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'nev' => 'required|string|max:255',
            'azonosito' => 'required|unique:munkafelvevo', 
            'jelszo' => 'required|string|confirmed' 
        ];
    }
}
