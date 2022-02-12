<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_buku extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function buku()
    {
        $buku = DB::table('buku')
        ->join('bahasa', 'bahasa.id_bahasa', '=', 'buku.id_bahasa')
        ->join('penerbit', 'penerbit.id_penerbit', '=', 'buku.id_penerbit')
        ->join('jenisbuku', 'jenisbuku.id_jenis', '=', 'buku.id_jenis')
        ->get();
        //return view('buku/blank_page_buku',['buku' => $buku]);
        $data = array(
            'menu' => 'Buku',
            'buku' => $buku,
            'submenu' => '',
        );

        return view('buku/blank_page_buku',$data);
    }

    public function tambahBuku()
    {
        $id = DB::table('bahasa')->get();
        $id2 = DB::table('penerbit')->get();
        $id3 = DB::table('jenisbuku')->get();
        $bahasa = DB::table('bahasa')->get();
        $data = array(
            'menu' => 'Buku',
            'bahasa' => $bahasa,
            'id' => $id,
            'id2' => $id2,
            'id3' => $id3,
            'submenu' => ''
        );
        return view('buku/tambah_buku',$data);
        //return view('tambah_buku');     
    }

    public function insertbuku(Request $post)
    {
        //tabel buku
    
        DB::table('buku')->insert([
            'noISBN' => $post->noISBN,
            'id_bahasa' => $post->id_bahasa,
            'id_penerbit' => $post->id_penerbit,
            'id_jenis' => $post->id_jenis,
            'judul_buku' => $post->judul_buku,
            'tahun_terbit' => $post->tahun_terbit,
            'penulis' => $post->penulis,
            'cetakan_ke' => $post->cetakan_ke,
            'harga' => $post->harga,
            'jumlah_eksemplar' => $post->jumlah_eksemplar,
            'kategori_buku' => $post->kategori_buku,
        ]);

        //kembali ke halaman data customer
        return redirect('/buku');
    }

    public function editbuku($noISBN)
    {
        $buku = DB::table('buku')->where('noISBN', $noISBN)->get();
        $id = DB::table('bahasa')->get();
        $id2 = DB::table('penerbit')->get();
        $id3 = DB::table('jenisbuku')->get();
        //return view('edit_buku',['buku' => $buku]);

        $data = array(
            'menu' => 'Buku',
            'buku' => $buku,
            'id' => $id,
            'id2' => $id2,
            'id3' => $id3,
            'submenu' => '',
        );
        return view('buku/edit_buku',$data);
    }

    public function updatebuku(Request $post)
    {
        // update tabel buku
        DB::table('buku')->where('noISBN', $post->noISBN)->update([
            'id_bahasa' => $post->id_bahasa,
            'id_penerbit' => $post->id_penerbit,
            'id_jenis' => $post->id_jenis,
            'judul_buku' => $post->judul_buku,
            'tahun_terbit' => $post->tahun_terbit,
            'penulis' => $post->penulis,
            'cetakan_ke' => $post->cetakan_ke,
            'harga' => $post->harga,
            'jumlah_eksemplar' => $post->jumlah_eksemplar,
            'kategori_buku' => $post->kategori_buku,
        ]);

        //kembali ke halaman data buku
        return redirect('/buku');
    }

    public function hapus($noISBN)
    {
        // menghapus data buku berdasarkan id yang dipilih
        DB::table('buku')->where('noISBN',$noISBN)->delete();
            
        // alihkan halaman ke halaman buku
        return redirect('/buku');
    }
}
