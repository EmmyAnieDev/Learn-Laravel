<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => ['required', 'max:20', 'min:2'],
            'email' => ['required', 'email'],
            'subject' => ['nullable', 'max:255'],
            'message' => ['required', 'max:5000'],
            
        ];
    }

    function messages()
    {
        return [

            'name.required' => 'The name field is mandatory.',
            'name.max' => 'The name must not exceed 20 characters.',
            'name.min' => 'The name must be at least 2 characters long.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',

        ];
    }
}
