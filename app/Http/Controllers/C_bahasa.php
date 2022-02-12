<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_bahasa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function bahasa()
    {
        $bahasa = DB::table('bahasa')->get();
        //return view('blank_page_bahasa',['bahasa' => $bahasa]);
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'bahasa',
            'bahasa' => $bahasa
        );

        return view('bahasa/blank_page_bahasa',$data);
    }

    public function tambahBahasa()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'bahasa'
        );
        return view('bahasa/tambah_bahasa',$data);
        //return view('tambah_bahasa');     
    }

    public function insertBahasa(Request $post)
    {
        //tabel customer
        DB::table('bahasa')->insert([
            'id_bahasa' => $post->id_bahasa,
            'nama_bahasa' => $post->nama_bahasa
        ]);

        //kembali ke halaman data customer
        return redirect('/penerbit');
    }

    public function editBahasa($idbahasa)
    {
        $bahasa = DB::table('bahasa')->where('id_bahasa', $idbahasa)->get();
        //return view('edit_bahasa',['bahasa' => $bahasa]);

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'bahasa',
            'bahasa' => $bahasa
        );
        return view('bahasa/edit_bahasa',$data);
    }

    public function updateBahasa(Request $post)
    {
        // update tabel customer
        DB::table('bahasa')->where('id_bahasa', $post->id_bahasa)->update([
            'nama_bahasa' => $post->nama_bahasa,
        ]);

        //kembali ke halaman data customer
        return redirect('/bahasa');
    }

}
