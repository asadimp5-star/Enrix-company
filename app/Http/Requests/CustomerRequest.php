<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image1'=>'nullable|image|mimes:webp,jpg,jpeg,gif,png|max:2024',

            'en' => 'nullable|array',
          
            'en.title' => 'nullable|min:10|max:100',
            'en.desc'=>'nullable|string|max:700',

            'nl' => 'nullable|array',
            
            'nl.title' => 'nullable|min:10|max:100',
            'nl.desc'=>'nullable|string|max:700',

            
        ];
    }
}
