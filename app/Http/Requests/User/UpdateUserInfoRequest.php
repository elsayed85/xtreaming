<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfoRequest extends FormRequest
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
            "name" => ['required' , 'string' , 'max:255'],
            "email" => ['required' , 'string' , 'email' , 'max:255' , 'unique:users,email,' . auth()->id()],
            "username" => ['required' , 'string' , 'max:255' , 'unique:users,username,' . auth()->id()],
            "password" => ['nullable' , 'string' , 'min:8'],
            "gender" => ['required' , 'string' , 'in:male,female'],
        ];
    }
}
