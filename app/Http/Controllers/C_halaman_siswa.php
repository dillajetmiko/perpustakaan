<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_halaman_siswa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function buku()
    {
        $buku = DB::table('buku')
        ->join('penerbit', 'penerbit.id_penerbit', '=', 'buku.id_penerbit')
        ->join('jenisbuku', 'jenisbuku.id_jenis', '=', 'buku.id_jenis')
        ->join('bahasa', 'bahasa.id_bahasa', '=', 'buku.id_bahasa')
        ->select('buku.*','penerbit.nama_penerbit','jenisbuku.nama_jenisbuku','bahasa.nama_bahasa')
        ->get();
        //return view('buku/blank_page_buku',['buku' => $buku]);
        $data = array(
            'menu' => 'Buku',
            'buku' => $buku,
            'submenu' => '',
        );

        return view('halamansiswa/blank_page_buku',$data);
    }

    public function history()
    {
        $detailpeminjaman = DB::table('detail_peminjaman')
            ->join('peminjaman', 'detail_peminjaman.id_peminjaman', '=', 'peminjaman.id_peminjaman')
            ->join('anggota', 'peminjaman.NIS_NIP', '=', 'anggota.NIS_NIP')
            ->join('eksemplarbuku', 'detail_peminjaman.kode_buku', '=', 'eksemplarbuku.kode_buku')
            ->join('buku', 'eksemplarbuku.noISBN', '=', 'buku.noISBN')
            ->select('detail_peminjaman.*','peminjaman.tanggal_pinjam', 'peminjaman.NIS_NIP','anggota.nama_anggota','buku.judul_buku')
            ->get();
        //return view('detailpeminjaman/blank_page_detailpeminjaman',['detailpeminjaman' => $detailpeminjaman]);
        $data = array(
            'menu' => 'History',
            'detailpeminjaman' => $detailpeminjaman,
            'submenu' => '',
        );

        return view('halamansiswa/blank_page_history',$data);
    }
}
