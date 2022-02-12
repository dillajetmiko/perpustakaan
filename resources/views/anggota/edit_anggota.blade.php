@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Anggota')

@section('title', 'Update Data Anggota')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/anggota">Anggota</a></li>
<li class="breadcrumb-item active">Update Data</li>
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

        <form action="/anggota/updateAnggota" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            NIS_NIP  : <input type="text" class="form-control" name="NIS_NIP" value ="{{ $anggota[0]->NIS_NIP }}" readonly><br>
            Nama Anggota : <input type="text" class="form-control" name="nama_anggota" value="{{ $anggota[0]->nama_anggota }}"><br>
            Tahun Masuk : <input type="text" class="form-control" name="tahun_masuk" value="{{ $anggota[0]->tahun_masuk }}"><br>
            Kelas : <input type="text" class="form-control" name="kelas" value="{{ $anggota[0]->kelas }}"><br>
            Username Anggota : <input type="text" class="form-control" name="username_anggota" value="{{ $anggota[0]->username_anggota }}"><br>
            Password Anggota : <input type="text" class="form-control" name="password_anggota" value="{{ $anggota[0]->password_anggota }}"><br>
            Status Anggota : <br>
                @if ($anggota[0]->status_anggota == 1)
                <label><input type="radio" name="status_anggota" value="1" checked="checked"/> Aktif </label>
                <label><input type="radio" name="status_anggota" value="0" /> Tidak Aktif </label><br>
                @else
                <label><input type="radio" name="status_anggota" value="1" /> Aktif </label>
                <label><input type="radio" name="status_anggota" value="0" checked="checked"/> Tidak Aktif </label><br>
                @endif
                <br>
            <input type="submit" value="Update">
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