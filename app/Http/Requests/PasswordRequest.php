<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            //
            'password' => 'required | min:8',
            'confirmPassword' => 'required | same:password'

        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Mật khẩu không được để trống !',
            'password.min'=>'Mật khẩu phải trên 8 kí tự',
            'confirmPassword.required' => 'Mật khẩu xác nhận không được để trống !',
            'confirmPassword.same'=>'Mật khẩu xác nhận không đúng !'
        ];
    }
}
