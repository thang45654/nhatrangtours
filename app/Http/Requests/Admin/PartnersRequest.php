<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PartnersRequest extends FormRequest
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
    public function rules(Request  $request)
    {
        return [
            'name'              =>'required',
            'password'          =>($request->view === 'store' ? 'required' : 'nullable').'|min:6',
            'email'             =>'required|email',
            'confirm_password'  =>($request->view === 'store' ? 'required' : 'nullable').'|min:6|same:password',
            'phone'             =>'required|max:15',
            'job'               =>'required',
            'date_of_birth'     =>'required',
            'identity_card'     =>'required',
//            'payment'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'            =>'Tên không được để trống',
            'email.required'           =>'Email không được để trống',
            'email.email'              =>'Email phải đúng định dạng',
            'password.required'        =>'Mật khẩu không được để trống',
            'password.min'             =>'Mật khẩu phải có ít nhất 6 ký tự',
            'confirm_password.min'     =>'Mật khẩu nhập lại phải có ít nhất 6 ký tự',
            'confirm_password.required'=>'Mật khẩu nhập lại không được để trống',
            'confirm_password.same'    =>'mật khẩu phải trùng nhau',
            'phone.required'           =>'Số điện thoại không được để trống',
            'job.required'             =>'Nghề nghiệp không được để trống',
            'date_of_birth.required'   =>'Ngày sinh không được để trống',
            'identity_card.required'   =>'Số CMND/CCCD không được để trống',
//            'payment.required' =>'Chọn hình thức thanh toán !',
        ];
    }
}
