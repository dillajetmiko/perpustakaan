<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_blankpage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home(){
        $data = array(
            'menu' => 'Home',
            'submenu' => ''
        );

        return view('blank_page',$data);
    } 

    public function home1(){
        $data = array(
            'menu' => 'Home',
            'submenu' => ''
        );

        return view('blank_page_s',$data);
    }

    public function aksesKhusus(){
        $data = array(
            'menu' => 'Home',
            'submenu' => ''
        );

        return view('pageAksesKhusus',$data);
    }


}
