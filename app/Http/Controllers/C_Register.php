<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class C_Register extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRegister()
    {
        return view('register.formRegister');
    }

    public function postRegister(Request $request)
    {
        
        $user = User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'roles_id' => 1,
        ]);

        return  redirect ('/login1');
    }
}
