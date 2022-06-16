<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'image' => 'file|image|max:3000|dimensions:min_width=100,min_height=100,max_width=400,max_height=400',
            'username' => 'required|min:5|max:30',
            'email' => "required|email:dns",
        ];
    }
}
