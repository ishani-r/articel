<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' =>  'required|string|email|max:255|regex:/(.+)@(.+)\.(.+)/i|unique:users',
            'mobile' => 'required|max:10|min:10',
            'password' => 'required|min:8|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter Your Name.',
            'email.required' => 'Please Enter Your Email Address.',
            'mobile.required' => 'Please Enter Your Mobile Number.',
            'password.regex' => 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.',
        ];
    }
}
