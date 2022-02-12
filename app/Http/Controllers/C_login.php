<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_login extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function getLogin()
    {
        $data = ['name' => ''];
        return view('login.formLoginAdmin',$data);
    }

    public function getLogin1()
    {
        $data = ['name' => ''];
        return view('login.formLogin',$data);
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->emailusername,
            'password' => $request->password,
            'roles_id' =>2,
        ])){
            return redirect('/home');
        }
        elseif(Auth::attempt([
            'username' => $request->emailusername,
            'password' => $request->password,
            'roles_id' =>2,
        ])){
            return redirect('/home');
        }

        else{
            $data = ['name' => 'login tidak berhasil'];
            return view('login.formLoginAdmin',$data);
        }
    }

    public function postLogin1(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->emailusername,
            'password' => $request->password,
            'roles_id' =>1,
        ])){
            return redirect('/halamansiswa');
        }
        elseif(Auth::attempt([
            'username' => $request->emailusername,
            'password' => $request->password,
            'roles_id' =>1,
        ])){
            return redirect('/halamansiswa');
        }

        else{
            $data = ['name' => 'login tidak berhasil'];
            return view('login.formLogin',$data);
        }
    }

}
