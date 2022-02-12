<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_penerbit extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function penerbit()
    {
        $penerbit = DB::table('penerbit')->get();
        //return view('blank_page_penerbit',['penerbit' => $penerbit]);
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'penerbit',
            'penerbit' => $penerbit
        );

        return view('penerbit/blank_page_penerbit',$data);
    }

    public function tambahPenerbit()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'penerbit'
        );
        return view('penerbit/tambah_penerbit',$data);
        //return view('tambah_penerbit');     
    }

    public function insertPenerbit(Request $post)
    {
        //tabel customer
        DB::table('penerbit')->insert([
            'id_penerbit' => $post->id_penerbit,
            'nama_penerbit' => $post->nama_penerbit,
            'alamat_penerbit' => $post->alamat_penerbit,
            'no_telp_penerbit' => $post->no_telp_penerbit,
            'email_penerbit' => $post->email_penerbit
        ]);

        //kembali ke halaman data customer
        return redirect('/penerbit');
    }

    public function editPenerbit($idpenerbit)
    {
        $penerbit = DB::table('penerbit')->where('id_penerbit', $idpenerbit)->get();
        //return view('edit_penerbit',['penerbit' => $penerbit]);

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'penerbit',
            'penerbit' => $penerbit
        );
        return view('penerbit/edit_penerbit',$data);
    }

    public function updatePenerbit(Request $post)
    {
        // update tabel customer
        DB::table('penerbit')->where('id_penerbit', $post->id_penerbit)->update([
            'nama_penerbit' => $post->nama_penerbit,
            'alamat_penerbit' => $post->alamat_penerbit,
            'no_telp_penerbit' => $post->no_telp_penerbit,
            'email_penerbit' => $post->email_penerbit
        ]);

        //kembali ke halaman data customer
        return redirect('/penerbit');
    }

    public function hapus($id_penerbit)
    {
        // menghapus data penerbit berdasarkan id yang dipilih
        DB::table('penerbit')->where('id_penerbit',$id_penerbit)->delete();
            
        // alihkan halaman ke halaman penerbit
        return redirect('/penerbit');
    }
}
