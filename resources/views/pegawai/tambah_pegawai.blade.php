@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Pegawai')

@section('title', 'Tambah Data Pegawai')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pegawai</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data Pegawai</h1> -->
        <form action="/pegawai/insertPegawai" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            NIP : <input type="text"  class="form-control" name="NIP"><br>
            Nama Pegawai : <input type="text" class="form-control" name="nama_pegawai"><br>
            Username : <input type="text" class="form-control" name="username"><br>
            Password : <input type="text" class="form-control" name="password_pegawai"><br>
            Status Pegawai : <br>
            <label><input type="radio" name="status_pegawai" value="1" /> Aktif </label>
            <label><input type="radio" name="status_pegawai" value="0" /> Tidak Aktif </label>
            <br><br>
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
