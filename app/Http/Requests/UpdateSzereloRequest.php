<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSzereloRequest extends FormRequest
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
            'azonosito' => 'required|unique:szerelo,azonosito,'.$this->szerelo->id, // Unique unless it's the current Szerelo
            'jelszo' => 'nullable|string|confirmed' // Password only if changed
        ];
    }
}
