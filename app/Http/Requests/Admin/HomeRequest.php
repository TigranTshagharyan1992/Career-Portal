<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // allow all users for now
    }

    public function rules(): array
    {
        return [
            'main_title'      => 'required|string|max:255',
            'main_image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'section1_title'  => 'required|string|max:255',
            'section1_text'   => 'required|string',
            'section1_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'section2_title'  => 'required|string|max:255',
            'section2_text'   => 'required|string',
            'section2_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'section3_title'  => 'required|string|max:255',
            'section3_text'   => 'required|string',
            'section3_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'main_title.required'      => 'Main title is required.',
            'main_image.image'          => 'Main image must be an image file.',
            'section1_title.required'   => 'Section 1 title is required.',
            'section1_text.required'    => 'Section 1 text is required.',
            'section1_image.image'      => 'Section 1 image must be an image file.',
            'section2_title.required'   => 'Section 2 title is required.',
            'section2_text.required'    => 'Section 2 text is required.',
            'section2_image.image'      => 'Section 2 image must be an image file.',
            'section3_title.required'   => 'Section 3 title is required.',
            'section3_text.required'    => 'Section 3 text is required.',
            'section3_image.image'      => 'Section 3 image must be an image file.',
        ];
    }
}
