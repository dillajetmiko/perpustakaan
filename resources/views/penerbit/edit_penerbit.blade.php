@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Penerbit')

@section('title', 'Update Data Penerbit')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/penerbit">Penerbit</a></li>
<li class="breadcrumb-item active">Update Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Penerbit</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="/penerbit/updatePenerbit" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Id Penerbit  : <input type="text" class="form-control" name="id_penerbit" value ="{{ $penerbit[0]->id_penerbit }}" readonly><br>
            Nama Penerbit : <input type="text" class="form-control" name="nama_penerbit" value="{{ $penerbit[0]->nama_penerbit }}"><br>
            Alamat : <input type="text" class="form-control" name="alamat_penerbit" value="{{ $penerbit[0]->alamat_penerbit }}"><br>
            No.telp : <input type="text" class="form-control" name="no_telp_penerbit" value="{{ $penerbit[0]->no_telp_penerbit }}"><br>
            Email : <input type="email" class="form-control" name="email_penerbit" value="{{ $penerbit[0]->email_penerbit }}"><br>
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