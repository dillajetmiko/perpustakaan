<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_detail_penerimaan extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }
    
    public function detailpenerimaan()
    {
        $detailpenerimaan = DB::table('detail_penerimaan')->get();
        //return view('detailpenerimaan/blank_page_detailpenerimaan',['detailpenerimaan' => $detailpenerimaan]);
        $data = array(
            'menu' => 'Detail_penerimaan',
            'detailpenerimaan' => $detailpenerimaan,
            'submenu' => '',
        );

        return view('detailpenerimaan/blank_page_detailpenerimaan',$data);
    }

    public function lihatdetailpenerimaan($id_penerimaan)
    {
        $penerimaan = DB::table('penerimaan')->where('id_penerimaan', $id_penerimaan)->get();
        $detailpenerimaan = DB::table('detail_penerimaan')->where('id_penerimaan', $id_penerimaan)->get();
        //return view('detailpenerimaan/blank_page_detailpenerimaan',['detailpenerimaan' => $detailpenerimaan]);
        $data = array(
            'menu' => 'Penerimaan',
            'detailpenerimaan' => $detailpenerimaan,
            'penerimaan' => $penerimaan,
            'submenu' => '',
        );

        return view('detailpenerimaan/blank_page_detailpenerimaan',$data);
    }

    public function tambahDetailpenerimaan($id_penerimaan)
    {
        $id = DB::table('buku')->get();
        $penerimaan = DB::table('penerimaan')->where('id_penerimaan', $id_penerimaan)->get();
        $detailpenerimaan = DB::table('detail_penerimaan')->where('id_penerimaan', $id_penerimaan)->get();
        $data = array(
            'menu' => 'Penerimaan',
            'detailpenerimaan' => $detailpenerimaan,
            'penerimaan' => $penerimaan,
            'id' => $id,
            'submenu' => ''
        );
        return view('detailpenerimaan/tambah_detailpenerimaan',$data);
        //return view('tambah_detailpenerimaan');     
    }

    public function insertDetailpenerimaan(Request $post)
    {
        //tabel detailpenerimaan
    
        DB::table('detail_penerimaan')->insert([
            'id_penerimaan' => $post->id_penerimaan,
            'noISBN' => $post->noISBN,
            'jumlah_eksemplar_perbuku' => $post->jumlah_eksemplar_perbuku,
        ]);

        //kembali ke halaman data customer
        return redirect('/lihatdetailpenerimaan/'.$post->id_penerimaan);
    }

    public function editDetailpenerimaan($id_penerimaan,$noISBN)
    {
        $detailpenerimaan = DB::table('detail_penerimaan')->where('id_penerimaan', $id_penerimaan)->where('noISBN', $noISBN)->get();
        //return view('edit_detailpenerimaan',['detailpenerimaan' => $detailpenerimaan]);

        $data = array(
            'menu' => 'Penerimaan',
            'detailpenerimaan' => $detailpenerimaan,
            'submenu' => '',
        );
        return view('detailpenerimaan/edit_detailpenerimaan',$data);
    }

    public function updateDetailpenerimaan(Request $post)
    {
        // update tabel detailpenerimaan
        DB::table('detail_penerimaan')->where('id_penerimaan', $post->id_penerimaan)->where('noISBN', $post->noISBN)->update([
            'jumlah_eksemplar_perbuku' => $post->jumlah_eksemplar_perbuku,
        ]);

        //kembali ke halaman data detailpenerimaan
        return redirect('/lihatdetailpenerimaan/'.$post->id_penerimaan);
    }

    public function hapus($id_penerimaan,$noISBN)
    {
        // menghapus data detail_penerimaan berdasarkan id yang dipilih
        DB::table('detail_penerimaan')->where('id_penerimaan',$id_penerimaan)->where('noISBN', $noISBN)->delete();
            
        // alihkan halaman ke halaman detail_penerimaan
        return redirect('/lihatdetailpenerimaan/'.$id_penerimaan);
    }
}
