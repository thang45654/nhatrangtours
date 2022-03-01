<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestTours extends FormRequest
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

            'name' => 'required|unique:tours,name|max:190|min:3',
            'price' => 'required|numeric',


        ];
    }

    public  function  messages()
    {
        return [
            'name.required' => 'Dữ liệu không được bỏ trống',
            'name.max' => 'Dữ liệu không quá 190 ký tự',
            'name.min' => 'Dữ liệu phải nhiều hơn 3 ký tự',
            'price.required' => 'Dữ liệu không được bỏ trống',
            'name.unique' => 'Dữ liệu không được trùng nhau',




        ];
    }
}
