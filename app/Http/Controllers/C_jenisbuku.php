<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_jenisbuku extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function jenisbuku()
    {
        $jenisbuku = DB::table('jenisbuku')->get();
        // return view('blank_page_jenisbuku',['jenisbuku' => $jenisbuku]);

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'jenisbuku',
            'jenisbuku' => $jenisbuku
        );

        return view('jenisbuku/blank_page_jenisbuku',$data);
    }

    public function tambahJenisbuku()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'jenisbuku'
        );
        return view('jenisbuku/tambah_jenisbuku',$data);     
    }

    public function insertJenisbuku(Request $post)
    {
        //tabel customer
        DB::table('jenisbuku')->insert([
            'id_jenis' => $post->id_jbuku,
            'nama_jenisbuku' => $post->nama_jbuku,
            'kode_jenisbuku' => $post->kode_jbuku
        ]);

        //kembali ke halaman data customer
        return redirect('/jenisbuku');
    }

    public function editJenisbuku($idjenis)
    {
        $jenisbuku = DB::table('jenisbuku')->where('id_jenis', $idjenis)->get();
        //return view('edit_jenisbuku',['jenisbuku' => $jenisbuku]);
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'jenisbuku',
            'jenisbuku' => $jenisbuku
        );
        return view('jenisbuku/edit_jenisbuku',$data);
    }

    public function updateJenisbuku(Request $post)
    {
        // update tabel customer
        DB::table('jenisbuku')->where('id_jenis', $post->id_jenis)->update([
            'nama_jenisbuku' => $post->nama_jbuku,
            'kode_jenisbuku' => $post->kode_jbuku
        ]);
            // var_dump($post->id_jenis);
            // var_dump($post->id_jbuku);
            // var_dump($post->nama_jbuku);
            // var_dump($post->kode_jbuku);

        //kembali ke halaman data customer
        return redirect('/jenisbuku');
    }

    public function hapus($id_jenis)
    {
        // menghapus data jenisbuku berdasarkan id yang dipilih
        DB::table('jenisbuku')->where('id_jenis',$id_jenis)->delete();
            
        // alihkan halaman ke halaman jenisbuku
        return redirect('/jenisbuku');
    }
}
