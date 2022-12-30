<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'email' => 'required|email:rfc,dns|unique:users,email',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
