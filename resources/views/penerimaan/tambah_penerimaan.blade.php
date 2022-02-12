@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Penerimaan')

@section('title', 'Tambah Data Penerimaan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/penerimaan">Penerimaan</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Penerimaan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data Penerimaan</h1> -->
        <form action="/penerimaan/insertPenerimaan" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            ID Penerimaan : <input type="text"  class="form-control" name="id_penerimaan"><br>
            Asal :
            <select class="form-control" name="id_asal">
            @foreach ($id as $asal)
            <option value="{{ $asal->id_asal}}">{{ $asal->asal}}</option>
            @endforeach
            </select><br>
            Pegawai :
            <select class="form-control" name="NIP">
            @foreach ($id2 as $pegawai)
            <option value="{{ $pegawai->NIP}}">{{ $pegawai->nama_pegawai}}</option>
            @endforeach
            </select><br>
            Tanggal penerimaan : <input type="date" class="form-control" name="tanggal_penerimaan"><br>
            Jumlah buku diterima : <input type="text" class="form-control" name="jumlah_buku_diterima"><br>
            Keterangan : <input type="text" class="form-control" name="keterangan"><br>
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
