<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_peminjaman extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function peminjaman()
    {
        $peminjaman = DB::table('peminjaman')->get();
        //return view('peminjaman/blank_page_peminjaman',['peminjaman' => $peminjaman]);
        $data = array(
            'menu' => 'Peminjaman',
            'peminjaman' => $peminjaman,
            'submenu' => '',
        );

        return view('peminjaman/blank_page_peminjaman',$data);
    }

    public function tambahPeminjaman()
    {
        $id = DB::table('anggota')->get();
        $id2 = DB::table('pegawai')->get();
        $data = array(
            'menu' => 'Peminjaman',
            'id' => $id,
            'id2' => $id2,
            'submenu' => ''
        );
        return view('peminjaman/tambah_peminjaman',$data);
        //return view('tambah_peminjaman');     
    }

    public function insertPeminjaman(Request $post)
    {
        //tabel peminjaman
    
        DB::table('peminjaman')->insert([
            'id_peminjaman' => $post->id_peminjaman,
            'NIS_NIP' => $post->NIS_NIP,
            'NIP' => $post->NIP,
            'jumlah_buku' => $post->jumlah_buku,
            'tanggal_pinjam' => $post->tanggal_pinjam,
        ]);

        //kembali ke halaman data customer
        return redirect('/peminjaman');
    }

    public function editPeminjaman($id_peminjaman)
    {
        $id = DB::table('anggota')->get();
        $id2 = DB::table('pegawai')->get();
        $peminjaman = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
        //return view('edit_peminjaman',['peminjaman' => $peminjaman]);

        $data = array(
            'menu' => 'Peminjaman',
            'peminjaman' => $peminjaman,
            'id' => $id,
            'id2' => $id2,
            'submenu' => '',
        );
        return view('peminjaman/edit_peminjaman',$data);
    }

    public function updatePeminjaman(Request $post)
    {
        // update tabel peminjaman
        DB::table('peminjaman')->where('id_peminjaman', $post->id_peminjaman)->update([
            'NIS_NIP' => $post->NIS_NIP,
            'NIP' => $post->NIP,
            'jumlah_buku' => $post->jumlah_buku,
            'tanggal_pinjam' => $post->tanggal_pinjam,
        ]);

        //kembali ke halaman data peminjaman
        return redirect('/peminjaman');
    }

    public function hapus($id_peminjaman)
    {
        // menghapus data peminjaman berdasarkan id yang dipilih
        DB::table('peminjaman')->where('id_peminjaman',$id_peminjaman)->delete();
            
        // alihkan halaman ke halaman peminjaman
        return redirect('/peminjaman');
    }
}
