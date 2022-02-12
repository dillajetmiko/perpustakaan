@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Pegawai')

@section('title', 'Update Data Pegawai')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/my_blank_page">Home</a></li>
<li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
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

        <form action="/pegawai/updatePegawai" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            NIP  : <input type="text" class="form-control" name="NIP" value ="{{ $pegawai[0]->NIP }}" readonly><br>
            nama_pegawai : <input type="text" class="form-control" name="nama_pegawai" value="{{ $pegawai[0]->nama_pegawai }}"><br>
            username : <input type="text" class="form-control" name="username" value="{{ $pegawai[0]->username }}"><br>
            password_pegawai : <input type="text" class="form-control" name="password_pegawai" value="{{ $pegawai[0]->password_pegawai }}"><br>
            status_pegawai : <input type="text" class="form-control" name="status_pegawai" value="{{ $pegawai[0]->status_pegawai }}"><br>
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