<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:32',
            'phone' => 'max:16',
            'age' => 'numeric',
            'password' => 'required|max:64',
            'email' => 'required|email|unique:students|max:64',
            'sex' => 'required',
        ];
    }
}
