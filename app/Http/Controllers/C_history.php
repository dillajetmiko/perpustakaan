<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_history extends Controller
{
    
    public function history()
    {
        $detailpeminjaman = DB::table('detail_peminjaman')
            ->join('peminjaman', 'detail_peminjaman.id_peminjaman', '=', 'peminjaman.id_peminjaman')
            ->join('anggota', 'peminjaman.NIS_NIP', '=', 'anggota.NIS_NIP')
            ->join('eksemplarbuku', 'detail_peminjaman.kode_buku', '=', 'eksemplarbuku.kode_buku')
            ->join('buku', 'eksemplarbuku.noISBN', '=', 'buku.noISBN')
            ->select('detail_peminjaman.*','peminjaman.tanggal_pinjam', 'peminjaman.NIS_NIP','anggota.nama_anggota','anggota.kelas','buku.judul_buku','buku.noISBN')
            ->get();

        $data = array(
            'menu' => 'History',
            'detailpeminjaman' => $detailpeminjaman,
            'submenu' => '',
        );

        return view('history/blank_page_history',$data);
    }

    public function history1()
    {
        $detailpeminjaman = DB::table('detail_peminjaman')
            ->join('peminjaman', 'detail_peminjaman.id_peminjaman', '=', 'peminjaman.id_peminjaman')
            ->join('anggota', 'peminjaman.NIS_NIP', '=', 'anggota.NIS_NIP')
            ->join('eksemplarbuku', 'detail_peminjaman.kode_buku', '=', 'eksemplarbuku.kode_buku')
            ->join('buku', 'eksemplarbuku.noISBN', '=', 'buku.noISBN')
            ->select('detail_peminjaman.*','peminjaman.tanggal_pinjam', 'peminjaman.NIS_NIP','anggota.nama_anggota','buku.judul_buku','buku.noISBN','buku.penulis')
            ->get();

        $data = array(
            'menu' => 'History1',
            'detailpeminjaman' => $detailpeminjaman,
            'submenu' => '',
        );

        return view('history/blank_page_history1',$data);
    }

    public function history2(){
        $data = array(
            'menu' => 'Home',
            'submenu' => ''
        );

        return view('history/history',$data);
    } 
}
