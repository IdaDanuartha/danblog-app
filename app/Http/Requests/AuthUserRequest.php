<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthUserRequest extends FormRequest
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
            'username' => 'required|min:5|max:50|unique:users,username',
            'email' => 'required|max:50|email:dns|unique:users,email',
            'password' => 'required_with:confirm_password|min:6|max:20',
            'confirm_password' => 'same:password',            
        ];
    }
}
