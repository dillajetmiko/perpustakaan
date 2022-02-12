@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Buku')

@section('title', 'Tambah Data Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/buku">Buku</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Buku</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data Buku</h1> -->
        <form action="/buku/insertBuku" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            No ISBN : <input type="text"  class="form-control" name="noISBN"><br>
            Bahasa : 
            <select class="form-control" name="id_bahasa">
            @foreach ($id as $bahasa)
            <option value="{{ $bahasa->id_bahasa}}">{{ $bahasa->nama_bahasa}}</option>
            @endforeach
            </select><br>
            Penerbit : 
            <select class="form-control" name="id_penerbit">
            @foreach ($id2 as $penerbit)
            <option value="{{ $penerbit->id_penerbit}}">{{ $penerbit->nama_penerbit}}</option>
            @endforeach
            </select><br>
            Jenis Buku :
            <select class="form-control" name="id_jenis">
            @foreach ($id3 as $jenisbuku)
            <option value="{{ $jenisbuku->id_jenis}}">{{ $jenisbuku->nama_jenisbuku}}</option>
            @endforeach
            </select><br>
            Judul Buku : <input type="text" class="form-control" name="judul_buku"><br>
            Tahun Terbit : <input type="text" class="form-control" name="tahun_terbit"><br>
            Penulis : <input type="text" class="form-control" name="penulis"><br>
            Cetakan ke : <input type="text" class="form-control" name="cetakan_ke"><br>
            Harga : <input type="text" class="form-control" name="harga"><br>
            Jumlah Eksemplar : <input type="text" class="form-control" name="jumlah_eksemplar"><br>
            Kategori Buku : <br>
            <label><input type="radio" name="kategori_buku" value="1" /> Non Fiksi </label>
            <label><input type="radio" name="kategori_buku" value="0" /> Fiksi </label>
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
