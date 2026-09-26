<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required | min:3',
            'subtitle'=>'required',
            'body'=>'required',
        ];
    }

    public function messages(){

        return [
            'title' => 'Il titolo è obbligatorio con almeno 3 caratteri',
            'subtitle' => 'Il sottotitolo è obbligatorio',
            'body' => 'Il contenuto è obbligatorio',
        ];
    }
}
