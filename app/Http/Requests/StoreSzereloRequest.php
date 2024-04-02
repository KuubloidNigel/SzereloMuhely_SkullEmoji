<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSzereloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Authorization logic here
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'nev' => 'required|string|max:255',
            'azonosito' => 'required|unique:szerelo', // Adjust uniqueness if needed
            'jelszo' => 'required|string|confirmed' 
        ];
    }
}