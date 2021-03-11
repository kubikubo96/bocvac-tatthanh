<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function edit()
    {
        $user = User::first();
        return view('admin.users.update', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = User::first();
        $user->update($request->all());
        return redirect()->route('admin.index')->with('message', 'Sửa sdt thành công!!');
    }

    public function handleLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Bạn chưa nhập Tài khoản',
                'password.required' => 'Bạn chưa nhập Mật khẩu'
            ]
        );
        //Auth::attempt :  kiểm tra đăng nhập
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('admin.index')->with('message', 'Đăng nhập thành công!!');
        } else {
            return redirect()->route('admin.login')->with('message', 'Đăng nhập không thành công :(');
        }
    }

    public function handleLogout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
