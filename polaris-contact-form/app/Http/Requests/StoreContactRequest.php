<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name!',
            'email.required' => 'Please enter your valid email!',
            'message.required' => 'Please provide a message!',
        ];
    }
}
