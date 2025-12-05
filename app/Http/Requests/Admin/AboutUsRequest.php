<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules()
    {
        return [
            'slider1_title' => 'nullable|string|max:255',
            'slider1_description' => 'nullable|string',

            'slider2_title' => 'nullable|string|max:255',
            'slider2_description' => 'nullable|string',

            'slider3_title' => 'nullable|string|max:255',
            'slider3_description' => 'nullable|string',

            'text1' => 'nullable|string',
            'text2' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'slider1_title.string' => 'Slider 1 title must be a valid text.',
            'slider1_title.max' => 'Slider 1 title may not exceed 255 characters.',
            'slider1_description.string' => 'Slider 1 description must be a valid text.',

            'slider2_title.string' => 'Slider 2 title must be a valid text.',
            'slider2_title.max' => 'Slider 2 title may not exceed 255 characters.',
            'slider2_description.string' => 'Slider 2 description must be a valid text.',

            'slider3_title.string' => 'Slider 3 title must be a valid text.',
            'slider3_title.max' => 'Slider 3 title may not exceed 255 characters.',
            'slider3_description.string' => 'Slider 3 description must be a valid text.',

            'text1.string' => 'Text1 must be valid text.',
            'text2.string' => 'Text2 must be valid text.',
        ];
    }
}
