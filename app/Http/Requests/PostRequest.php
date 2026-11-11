<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'image2'=>'nullable|image|mimes:webp,jpg,jpeg,gif,png|max:2024',
            'image3'=>'nullable|image|mimes:webp,jpg,jpeg,gif,png|max:2024',
            'profImg'=>'nullable|image|mimes:webp,jpg,jpeg,gif,png|max:2024',
            'delete_img1'=> 'nullable|boolean',
            'delete_img2'=> 'nullable|boolean',
            'delete_img3'=> 'nullable|boolean',
            'delete_profImg'=> 'nullable|boolean',
            'slug' =>'nullable|string|max:100',
            
            'en' => 'nullable|array',
          
            'en.title' => 'nullable|min:10|max:100',
            
            'en.summery'=>'nullable|string|max:700',
            'en.keywords'=>'nullable|string|max:100',
            'en.describe1'=>'nullable|string|max:2000',
            'en.describe2'=>'nullable|string|max:2000',
            'en.describe3'=>'nullable|string|max:2000',
            'en.describe4'=>'nullable|string|max:2000',
            'en.sourceTitle'=>'nullable|string|max:100',
            'en.sourceDesc'=>'nullable|string|max:200',
            'en.aouther'=>'nullable|string|max:100',
            
            'nl' => 'nullable|array',
            
            'nl.title' => 'nullable|min:10|max:100',
            'nl.summery'=>'nullable|string|max:700',
            'nl.keywords'=>'nullable|string|max:100',
            'nl.describe1'=>'nullable|string|max:2000',
            'nl.describe2'=>'nullable|string|max:2000',
            'nl.describe3'=>'nullable|string|max:2000',
            'nl.describe4'=>'nullable|string|max:2000',
            'nl.sourceTitle'=>'nullable|string|max:100',
            'nl.sourceDesc'=>'nullable|string|max:200',
            'nl.aouther'=>'nullable|string|max:100',
                       
        ];
    }
}
