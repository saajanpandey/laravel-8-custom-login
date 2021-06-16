<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'address'=>'required|max:255',
            'contact'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return[
            'firstname.required'=>'Firstname is required',
            'lastname.required'=>'Lastname is required',
            'address.required'=>'Address is required',
            'email.required'=>'Email is required',
            'contact.required'=>'Contact is required',
            'password.required'=>'Password is required',
            // 'password.max'=>'Maximum password character is 12',
            // 'password.min'=>'Minimum password character is 8'
        ];
    }
}
