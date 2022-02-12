<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_penerimaan extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function penerimaan()
    {
        $penerimaan = DB::table('penerimaan')
        ->join('asal', 'asal.id_asal', '=', 'penerimaan.id_asal')
        ->join('pegawai', 'pegawai.NIP', '=', 'penerimaan.NIP')
        ->get();
        //return view('penerimaan/blank_page_penerimaan',['penerimaan' => $penerimaan]);
        $data = array(
            'menu' => 'Penerimaan',
            'penerimaan' => $penerimaan,
            'submenu' => '',
        );

        return view('penerimaan/blank_page_penerimaan',$data);
    }

    public function tambahPenerimaan()
    {
        $id = DB::table('asal')->get();
        $id2 = DB::table('pegawai')->get();
        $data = array(
            'menu' => 'Penerimaan',
            'submenu' => '',
            'id' => $id,
            'id2' => $id2,
        );
        return view('penerimaan/tambah_penerimaan',$data);
        //return view('tambah_penerimaan');     
    }

    public function insertPenerimaan(Request $post)
    {
        //tabel penerimaan
    
        DB::table('penerimaan')->insert([
            'id_penerimaan' => $post->id_penerimaan,
            'id_asal' => $post->id_asal,
            'NIP' => $post->NIP,
            'tanggal_penerimaan' => $post->tanggal_penerimaan,
            'jumlah_buku_diterima' => $post->jumlah_buku_diterima,
            'keterangan' => $post->keterangan,
        ]);

        //kembali ke halaman data customer
        return redirect('/penerimaan');
    }

    public function editPenerimaan($id_penerimaan)
    {
        $penerimaan = DB::table('penerimaan')->where('id_penerimaan', $id_penerimaan)->get();
        $id = DB::table('asal')->get();
        $id2 = DB::table('pegawai')->get();
        //return view('edit_penerimaan',['penerimaan' => $penerimaan]);

        $data = array(
            'menu' => 'Penerimaan',
            'penerimaan' => $penerimaan,
            'id' => $id,
            'id2' => $id2,
            'submenu' => '',
        );
        return view('penerimaan/edit_penerimaan',$data);
    }

    public function updatePenerimaan(Request $post)
    {
        // update tabel penerimaan
        DB::table('penerimaan')->where('id_penerimaan', $post->id_penerimaan)->update([
            'id_asal' => $post->id_asal,
            'NIP' => $post->NIP,
            'tanggal_penerimaan' => $post->tanggal_penerimaan,
            'jumlah_buku_diterima' => $post->jumlah_buku_diterima,
            'keterangan' => $post->keterangan,
        ]);

        //kembali ke halaman data penerimaan
        return redirect('/penerimaan');
    }

    public function hapus($id_penerimaan)
    {
        // menghapus data penerimaan berdasarkan id yang dipilih
        DB::table('penerimaan')->where('id_penerimaan',$id_penerimaan)->delete();
            
        // alihkan halaman ke halaman penerimaan
        return redirect('/penerimaan');
    }
}
