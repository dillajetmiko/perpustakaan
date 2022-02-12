@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Jenis Buku')

@section('title', 'Update Data Jenis Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/jenisbuku">Jenis Buku</a></li>
<li class="breadcrumb-item active">Update Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Jenis Buku</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">

        <form action="/jenisbuku/updateJenisbuku" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            ID Jenis Buku  : <input type="text" class="form-control" name="id_jenis" value ="{{ $jenisbuku[0]->id_jenis }}" readonly><br>
            Nama Jenis Buku : <input type="text" class="form-control" name="nama_jbuku" value="{{ $jenisbuku[0]->nama_jenisbuku }}"><br>
            Kode Jenis Buku : <input type="text" class="form-control" name="kode_jbuku" value="{{ $jenisbuku[0]->kode_jenisbuku }}"><br>
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