<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function formChangePassword($id)
    {


        return view('auth.change-password');

    }

    public function changePasswordPost(PasswordRequest $request, $id)
    {

        $user = User::find($id);
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        if (Hash::check($password, bcrypt($confirmPassword))) {
            $user->update(['password' => $password]);
            return redirect()->back()->with('success', 'Đổi mật khẩu thành công !');
        }
        return redirect()->back()->with('error', 'Đổi mật khẩu không thành công !');


    }

}
