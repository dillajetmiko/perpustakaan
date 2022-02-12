@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Anggota')

@section('title', 'Tambah Data Anggota')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/anggota">Anggota</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data Anggota</h1> -->
        <form action="/anggota/insertAnggota" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            NIS_NIP : <input type="text"  class="form-control" name="NIS_NIP"><br>
            Nama Anggota : <input type="text" class="form-control" name="nama_anggota"><br>
            Tahun Masuk : <input type="text" class="form-control" name="tahun_masuk"><br>
            Kelas : <input type="text" class="form-control" name="kelas"><br>
            Username : <input type="text" class="form-control" name="username_anggota"><br>
            Password : <input type="text" class="form-control" name="password_anggota"><br>
            Status Anggota :<br>
            <label><input type="radio" name="status_anggota" value="1" /> Aktif </label>
            <label><input type="radio" name="status_anggota" value="0" /> Tidak Aktif </label>
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
