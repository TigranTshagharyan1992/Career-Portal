<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'Name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'Country' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Message' => 'nullable|required|string',
            'Phone' => '|string|max:255',
        ];
    }
}
