<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestIndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'age' => 'required|integer|max_digits:3',
        ];
    }
}
