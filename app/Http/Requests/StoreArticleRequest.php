<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title'=>'required|max:500',
            'category'=>'required|max:50',
            'description'=>'required|max:255',
            'body'=>'|max:5000',
        ];
    }

            public function messages(): array{

                return[
        'title.required' => 'Il campo titolo è obbligatorio',
        'title.max' => 'Il campo titolo deve contenere massimo :max caratteri',
        'category.required' => 'Il campo categoria è obbligatorio',
        'category.max' => 'Il campo categoria deve contenere massimo :max caratteri',
        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.max' => 'Il campo descrizione deve contenere massimo :max caratteri',
        'body.max' => 'Il campo body deve contenere massimo :max caratteri',


                ];
            }
}
