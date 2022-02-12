<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_anggota extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }

    public function anggota()
    {
        $anggota = DB::table('anggota')->get();
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'anggota',
            'anggota' => $anggota
        );

        return view('anggota/blank_page_anggota',$data);
    }

    public function tambahAnggota()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'anggota'
        );
        return view('anggota/tambah_anggota',$data);    
    }

    public function insertAnggota(Request $post)
    {
        //tabel anggota
        
        DB::table('anggota')->insert([
            'NIS_NIP' => $post->NIS_NIP,
            'nama_anggota' => $post->nama_anggota,
            'tahun_masuk' => $post->tahun_masuk,
            'kelas' => $post->kelas,
            'username_anggota' => $post->username_anggota,
            'password_anggota' => $post->password_anggota,
            'status_anggota' => $post->status_anggota,
        ]);

        //kembali ke halaman data customer
        return redirect('/anggota');
    }

    public function editAnggota($NIS_NIP)
    {
        $anggota = DB::table('anggota')->where('NIS_NIP', $NIS_NIP)->get();
        //return view('edit_anggota',['anggota' => $anggota]);

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'anggota',
            'anggota' => $anggota
        );
        return view('anggota/edit_anggota',$data);
    }

    public function updateAnggota(Request $post)
    {
        // update tabel anggota
        DB::table('anggota')->where('NIS_NIP', $post->NIS_NIP)->update([
            'nama_anggota' => $post->nama_anggota,
            'tahun_masuk' => $post->tahun_masuk,
            'kelas' => $post->kelas,
            'username_anggota' => $post->username_anggota,
            'password_anggota' => $post->password_anggota,
            'status_anggota' => $post->status_anggota,
        ]);

        //kembali ke halaman data anggota
        return redirect('/anggota');
    }

    public function hapus($NIS_NIP)
    {
        // menghapus data anggota berdasarkan id yang dipilih
        DB::table('anggota')->where('NIS_NIP',$NIS_NIP)->delete();
            
        // alihkan halaman ke halaman anggota
        return redirect('/anggota');
    }
}
