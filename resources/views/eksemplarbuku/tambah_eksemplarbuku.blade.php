@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Eksemplar Buku')

@section('title', 'Tambah Data Eksemplar Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/eksemplarbuku">Eksemplar Buku</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Eksemplar Buku</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data eksemplarbuku</h1> -->
        <form action="/eksemplarbuku/insertEksemplarbuku" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            Kode Buku : <input type="text"  class="form-control" name="kode_buku"><br>
            No ISBN : 
            <select class="form-control" name="noISBN">
            @foreach ($id as $buku)
            <option value="{{ $buku->noISBN}}">{{ $buku->noISBN}}</option>
            @endforeach
            </select><br>
            Status Eksemplar Buku : <br>
            <label><input type="radio" name="status_eksemplar_buku" value="1" /> Tersedia </label>
            <label><input type="radio" name="status_eksemplar_buku" value="0" /> Tidak Tersedia </label>
            <br><br>
            Kondisi Eksemplar Buku : <br>
            <label><input type="radio" name="kondisi_eksemplar_buku" value="1" /> Bagus </label>
            <label><input type="radio" name="kondisi_eksemplar_buku" value="0" /> Buruk </label>
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
