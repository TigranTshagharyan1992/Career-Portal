<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AcademyRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'Course_name' => 'required|string|max:255',
            'Country' => 'required|string|max:255',
            'Course_description' => 'required|string',
            'How_to_apply' => 'required|string',
            'Deadline' => 'required|date',
            'is_active' => 'sometimes|int',
        ];

    }

    public function messages(): array
    {
        return [
            'Course_name.required' => 'The course name is required.',
            'Course_name.string' => 'The course name must be a string.',
            'Course_name.max' => 'The course name cannot exceed 255 characters.',

            'Country.required' => 'The country is required.',
            'Country.string' => 'The country must be a string.',
            'Country.max' => 'The country cannot exceed 255 characters.',

            'Course_description.required' => 'The course description is required.',
            'Course_description.string' => 'The course description must be a string.',

            'How_to_apply.required' => 'Please provide instructions on how to apply.',
            'How_to_apply.string' => 'The how to apply field must be a string.',

            'Deadline.required' => 'The deadline is required.',
            'Deadline.date' => 'The deadline must be a valid date.',
        ];
    }
}
