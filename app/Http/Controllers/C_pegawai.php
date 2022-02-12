<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_pegawai extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function pegawai()
    {
        $pegawai = DB::table('pegawai')->get();
        //return view('blank_page_pegawai',['pegawai' => $pegawai]);
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'pegawai',
            'pegawai' => $pegawai
        );

        return view('pegawai/blank_page_pegawai',$data);
    }

    public function tambahPegawai()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'pegawai'
        );
        return view('pegawai/tambah_pegawai',$data);
        //return view('tambah_pegawai');     
    }

    public function insertPegawai(Request $post)
    {
        //tabel pegawai
        
        DB::table('pegawai')->insert([
            'NIP' => $post->NIP,
            'nama_pegawai' => $post->nama_pegawai,
            'username' => $post->username,
            'password_pegawai' => $post->password_pegawai,
            'status_pegawai' => $post->status_pegawai,
        ]);

        //kembali ke halaman data customer
        return redirect('/pegawai');
    }

    public function editPegawai($NIP)
    {
        $pegawai = DB::table('pegawai')->where('NIP', $NIP)->get();
        //return view('edit_pegawai',['pegawai' => $pegawai]);

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'pegawai',
            'pegawai' => $pegawai
        );
        return view('pegawai/edit_pegawai',$data);
    }

    public function updatePegawai(Request $post)
    {
        // update tabel pegawai
        DB::table('pegawai')->where('NIP', $post->NIP)->update([
            'nama_pegawai' => $post->nama_pegawai,
            'username' => $post->username,
            'password_pegawai' => $post->password_pegawai,
            'status_pegawai' => $post->status_pegawai,
        ]);

        //kembali ke halaman data pegawai
        return redirect('/pegawai');
    }

    public function hapus($NIP)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('NIP',$NIP)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}


