<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_detail_peminjaman extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }

    // public function detailpeminjaman()
    // {
    //     $detailpeminjaman = DB::table('detail_peminjaman')->get();
    //     //return view('detailpeminjaman/blank_page_detailpeminjaman',['detailpeminjaman' => $detailpeminjaman]);
    //     $data = array(
    //         'menu' => 'Peminjaman',
    //         'detailpeminjaman' => $detailpeminjaman,
    //         'peminjaman' => $peminjaman,
    //         'submenu' => '',
    //     );

    //     return view('detailpeminjaman/blank_page_detailpeminjaman',$data);
    // }

    public function lihatdetailpeminjaman($id_peminjaman)
    {
        $peminjaman = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
        $detailpeminjaman = DB::table('detail_peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
        //return view('detailpeminjaman/blank_page_detailpeminjaman',['detailpeminjaman' => $detailpeminjaman]);
        $data = array(
            'menu' => 'Peminjaman',
            'detailpeminjaman' => $detailpeminjaman,
            'peminjaman' => $peminjaman,
            'submenu' => '',
        );

        return view('detailpeminjaman/blank_page_detailpeminjaman',$data);
    }

    public function tambahDetailpeminjaman($id_peminjaman)
    {
        $id = DB::table('eksemplarbuku')->where('status_eksemplar_buku', 1)->get();
        $peminjaman = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
        $detailpeminjaman = DB::table('detail_peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
        $eksemplarbuku = DB::table('eksemplarbuku')
        ->join('buku', 'buku.noISBN', '=', 'eksemplarbuku.noISBN')
        ->select('eksemplarbuku.*','buku.judul_buku')
        ->get();
        $data = array(
            'menu' => 'Peminjaman',
            'eksemplarbuku' => $eksemplarbuku,
            'detailpeminjaman' => $detailpeminjaman,
            'peminjaman' => $peminjaman,
            'id' => $id,
            'submenu' => ''
        );
        return view('detailpeminjaman/tambah_detailpeminjaman',$data);
        //return view('tambah_detailpeminjaman');     
    }

    public function insertDetailpeminjaman(Request $post)
    {
        //tabel detailpeminjaman
        
        DB::table('detail_peminjaman')->insert([
            'id_peminjaman' => $post->id_peminjaman,
            'kode_buku' => $post->kode_buku,
            'status_peminjaman' => $post->status_peminjaman,
            'denda_perbuku' => $post->denda_perbuku,
            'tanggal_haruskembali' => $post->tanggal_haruskembali,
            'tanggal_kembali' => $post->tanggal_kembali,
            'perpanjangan' => $post->perpanjangan,
            'status_verifikasi' => $post->status_verifikasi,
        ]);
        

        //kembali ke halaman data customer
        return redirect('/lihatdetailpeminjaman/'.$post->id_peminjaman);
    }

    public function editDetailpeminjaman($id_peminjaman,$kode_buku)
    {
        $detailpeminjaman = DB::table('detail_peminjaman')->where('id_peminjaman', $id_peminjaman)->where('kode_buku',$kode_buku)->get();
        //return view('edit_detailpeminjaman',['detailpeminjaman' => $detailpeminjaman]);

        $data = array(
            'menu' => 'Peminjaman',
            'detailpeminjaman' => $detailpeminjaman,
            'submenu' => '',
        );
        return view('detailpeminjaman/edit_detailpeminjaman',$data);
    }

    public function updateDetailpeminjaman(Request $post)
    {
        // update tabel detailpeminjaman
        DB::table('detail_peminjaman')->where('id_peminjaman', $post->id_peminjaman)->where('kode_buku',$post->kode_buku)->update([
            'status_peminjaman' => $post->status_peminjaman,
            'denda_perbuku' => $post->denda_perbuku,
            'tanggal_haruskembali' => $post->tanggal_haruskembali,
            'tanggal_kembali' => $post->tanggal_kembali,
            'perpanjangan' => $post->perpanjangan,
            'status_verifikasi' => $post->status_verifikasi,
        ]);

        //kembali ke halaman data detailpeminjaman
        return redirect('/lihatdetailpeminjaman/'.$post->id_peminjaman);
    }

    public function hapus($id_peminjaman,$kode_buku)
    {
        // menghapus data detail_peminjaman berdasarkan id yang dipilih
        DB::table('detail_peminjaman')->where('id_peminjaman',$id_peminjaman)->where('kode_buku',$kode_buku)->delete();
            
        // alihkan halaman ke halaman detail_peminjaman
        return redirect('/lihatdetailpeminjaman/'.$id_peminjaman);
    }

}
