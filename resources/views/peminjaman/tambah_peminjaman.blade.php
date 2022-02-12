@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Peminjaman')

@section('title', 'Tambah Data Peminjaman')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/peminjaman">Peminjaman</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Peminjaman</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data Peminjaman</h1> -->
        <form action="/peminjaman/insertPeminjaman" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            ID Peminjaman : <input type="text"  class="form-control" name="id_peminjaman"><br>
            NIS_NIP: 
            <select class="form-control" name="NIS_NIP">
            @foreach ($id as $pegawai)
            <option value="{{ $pegawai->NIS_NIP}}">{{ $pegawai->NIS_NIP}}</option>
            @endforeach
            </select><br>
            NIP Pegawai: 
            <select class="form-control" name="NIP">
            @foreach ($id2 as $pegawai)
            <option value="{{ $pegawai->NIP}}">{{ $pegawai->NIP}}</option>
            @endforeach
            </select><br>
            Jumlah Buku : <input type="text" class="form-control" name="jumlah_buku"><br>
            Tanggal Pinjam : <input type="date" class="form-control" name="tanggal_pinjam"><br>
            <input type="submit" value="Simpan">
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection
