@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Pegawai')

@section('title', 'Update Data Pegawai')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
<li class="breadcrumb-item active">Update Data</li>
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

        <form action="/pegawai/updatePegawai" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            NIP  : <input type="text" class="form-control" name="NIP" value ="{{ $pegawai[0]->NIP }}" readonly><br>
            Nama Pegawai : <input type="text" class="form-control" name="nama_pegawai" value="{{ $pegawai[0]->nama_pegawai }}"><br>
            Username : <input type="text" class="form-control" name="username" value="{{ $pegawai[0]->username }}"><br>
            Password : <input type="text" class="form-control" name="password_pegawai" value="{{ $pegawai[0]->password_pegawai }}"><br>
            Status Pegawai : <br>
                @if ($pegawai[0]->status_pegawai == 1)
                <label><input type="radio" name="status_pegawai" value="1" checked="checked"/> Aktif </label>
                <label><input type="radio" name="status_pegawai" value="0" /> Tidak Aktif </label><br>
                @else
                <label><input type="radio" name="status_pegawai" value="1" /> Aktif </label>
                <label><input type="radio" name="status_pegawai" value="0" checked="checked"/> Tidak Aktif </label><br>
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