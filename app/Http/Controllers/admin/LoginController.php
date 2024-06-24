<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LoginController extends Controller
{
    public function showlogin()
    {
        return view('admin.screens.login');
    }
}
