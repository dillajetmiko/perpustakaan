<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_eksemplar_buku extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function eksemplarbuku()
    {
        $eksemplarbuku = DB::table('eksemplarbuku')
        ->join('buku', 'buku.noISBN', '=', 'eksemplarbuku.noISBN')
        ->select('eksemplarbuku.*','buku.judul_buku')
        ->get();
        //return view('blank_page_eksemplarbuku',['eksemplarbuku' => $eksemplarbuku]);
        $data = array(
            'menu' => 'Eksemplar_buku',
            'eksemplarbuku' => $eksemplarbuku,
            'submenu' => '',
        );

        return view('eksemplarbuku/blank_page_eksemplarbuku',$data);
    }

    public function tambahEksemplarbuku()
    {
        $id = DB::table('buku')->get();
        $data = array(
            'menu' => 'Eksemplar_buku',
            'id' => $id,
            'submenu' => ''
        );
        return view('eksemplarbuku/tambah_eksemplarbuku',$data);
        //return view('tambah_eksemplarbuku');     
    }

    public function insertEksemplarbuku(Request $post)
    {
        //tabel eksemplarbuku
        
        DB::table('eksemplarbuku')->insert([
            'kode_buku' => $post->kode_buku,
            'noISBN' => $post->noISBN,
            'status_eksemplar_buku' => $post->status_eksemplar_buku,
            'kondisi_eksemplar_buku' => $post->kondisi_eksemplar_buku,
        ]);

        //kembali ke halaman data customer
        return redirect('/eksemplarbuku');
    }

    public function editEksemplarbuku($kode_buku)
    {
        $eksemplarbuku = DB::table('eksemplarbuku')->where('kode_buku', $kode_buku)->get();
        //return view('edit_eksemplarbuku',['eksemplarbuku' => $eksemplarbuku]);
        // id
        $id = DB::table('buku')->get();
        $data = array(
            'menu' => 'Eksemplar_buku',
            'eksemplarbuku' => $eksemplarbuku,
            'submenu' => '',
            'id' => $id,
        );
        return view('eksemplarbuku/edit_eksemplarbuku',$data);
    }

    public function updateEksemplarbuku(Request $post)
    {
        // update tabel eksemplarbuku
        DB::table('eksemplarbuku')->where('kode_buku', $post->kode_buku)->update([
            'noISBN' => $post->noISBN,
            'status_eksemplar_buku' => $post->status_eksemplar_buku,
            'kondisi_eksemplar_buku' => $post->kondisi_eksemplar_buku,
        ]);

        //kembali ke halaman data eksemplarbuku
        return redirect('/eksemplarbuku');
    }

    public function hapus($kode_buku)
    {
        // menghapus data eksemplarbuku berdasarkan id yang dipilih
        DB::table('eksemplarbuku')->where('kode_buku',$kode_buku)->delete();
            
        // alihkan halaman ke halaman eksemplarbuku
        return redirect('/eksemplarbuku');
    }
}
