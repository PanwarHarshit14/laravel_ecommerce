<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class LoginController extends Controller
{
    public function showlogin()
    {
        return view('admin.screens.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:admins,username',
            'password' => 'required'
        ], [
            'username.exists' => 'Login Failed! Username doesn\'t exists.'
        ]);

        $isLogin = Auth::guard('admin')->attempt($request->only(['username', 'password']));

        if ($isLogin) {
            return redirect(route('admin.dashboard'));
        } else {
            return redirect()->back()->withErrors(['message' => 'Login Failed! Password is not matched.']);
        }
    }
}
