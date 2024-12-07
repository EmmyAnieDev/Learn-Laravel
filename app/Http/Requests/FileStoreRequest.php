<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'file' => ['required', 'file', 'mimes:jpeg,png,pdf,docx', 'max:5120'], // 5MB max file size
        ];
    }

    /**
     * Custom error messages for validation rules.
     */
    public function messages()
    {
        return [
            'file.required' => 'Please upload a file.',
            'file.file' => 'The uploaded item must be a valid file.',
            'file.mimes' => 'Only JPEG, PNG, PDF, and DOCX file types are allowed.',
            'file.max' => 'The file size must not exceed 5MB.',
        ];
    }
}
