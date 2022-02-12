<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_pengembalian extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function pengembalian()
    {
        $pengembalian = DB::table('detail_peminjaman')->get();
        $detailpeminjaman = DB::table('detail_peminjaman')->get();
        $eksemplarbuku = DB::table('eksemplarbuku')
        ->join('buku', 'buku.noISBN', '=', 'eksemplarbuku.noISBN')
        ->select('eksemplarbuku.*','buku.judul_buku')
        ->get();
        //return view('pengembalian/blank_page_pengembalian',['pengembalian' => $pengembalian]);
        $data = array(
            'menu' => 'Pengembalian',
            'pengembalian' => $pengembalian,
            'eksemplarbuku'=> $eksemplarbuku,
            'submenu' => '',
        );

        return view('pengembalian/blank_page_pengembalian',$data);
    }

    public function editPengembalian($id_peminjaman,$kode_buku)
    {
        $pengembalian = DB::table('detail_peminjaman')->where('id_peminjaman', $id_peminjaman)
                                                    ->where('kode_buku', $kode_buku)
                                                    ->get();
        //return view('edit_pengembalian',['pengembalian' => $pengembalian]);
        
        $data = array(
            'menu' => 'Pengembalian',
            'pengembalian' => $pengembalian,
            'submenu' => '',
        );
        return view('pengembalian/edit_pengembalian',$data);
    }

    public function updatePengembalian(Request $post)
    {
        // update tabel pengembalian
        DB::table('detail_peminjaman')->where('id_peminjaman', $post->id_peminjaman)
        ->where('kode_buku', $post->kode_buku)
        ->update([
            'status_peminjaman' => $post->status_peminjaman,
            'denda_perbuku' => $post->denda_perbuku,
            'tanggal_haruskembali' => $post->tanggal_haruskembali,
            'tanggal_kembali' => $post->tanggal_kembali,
            'perpanjangan' => $post->perpanjangan,
            'status_verifikasi' => $post->status_verifikasi,
        ]);

        //kembali ke halaman data pengembalian
        return redirect('/pengembalian');
    }
}
