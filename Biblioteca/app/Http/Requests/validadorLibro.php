<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
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
            
                'txtisbn'=>'required|numeric|digits: 13',
                'txttitulo'=>'required|string|max:150',
                'txtautor'=>'required|string|max:100',
                'txtpaginas'=>'required|integer|min:1',
                'txtanio'=>'required|integer|between:1000,2024',
                'txteditorial'=>'required|string|max:100',
                'txtcorreo'=>'required|email'
              ];
    }
}
