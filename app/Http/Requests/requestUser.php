<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class requestUser extends FormRequest
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
        $userId = $this->route('id');

        return [
            'name' => 'required|max:45|regex:/^[a-zA-ZñÑ\s]+$/u',
            'identification' => [
                'required',
                'min:10',
                'max:10',
                Rule::unique('users')->ignore($userId, 'id'),
            ],
            'address' => 'required',
            'phone'  => [
                'required',
                'min:10',
                'max:10',
                Rule::unique('users')->ignore($userId, 'id'),
            ],
        ];
    }

    public function messages()
    {
        return [
            'min' => 'Formato no valido',
            'max' => 'Formato no valido',
            'required' => 'Porfavor complete este campo.'
        ];
    }
}
