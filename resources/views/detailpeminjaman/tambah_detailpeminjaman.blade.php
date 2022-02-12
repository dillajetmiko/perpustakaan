@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Tambah Data Detail Peminjaman')

@section('title', 'Tambah Data Detail Peminjaman')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/peminjaman">Peminjaman</a></li>
<li class="breadcrumb-item"><a href="/lihatdetailpeminjaman/{{ $peminjaman[0]->id_peminjaman }}">Detail Peminjaman</a></li>
<li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Detail Peminjaman</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <!-- <h1>Tambah Data Peminjaman</h1> -->
        <form action="/detailpeminjaman/insertDetailpeminjaman" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>">
            Id Peminjaman  : <input type="text" class="form-control" name="id_peminjaman" value ="{{ $peminjaman[0]->id_peminjaman }}" readonly><br>
            Kode Buku : 
            <select class="form-control" name="kode_buku">
            @foreach ($id as $eksemplarbuku)
            <option value="{{ $eksemplarbuku->kode_buku}}">{{ $eksemplarbuku->kode_buku}}</option>
            @endforeach
            </select><br>
            Denda Perbuku : <input type="text" class="form-control" name="denda_perbuku"><br>
            Tanggal harus kembali : <input type="date" class="form-control" name="tanggal_haruskembali"><br>
            <!-- tanggal_kembali : <input type="date" class="form-control" name="tanggal_kembali"><br>
            perpanjangan : <input type="text" class="form-control" name="perpanjangan"><br> -->
            Status Peminjaman :<br> 
            <label><input type="radio" name="status_peminjaman" value="0" /> Dipinjam </label>
            <label><input type="radio" name="status_peminjaman" value="1" /> Kembali </label>
            <br><br>
            Status Verifikasi :<br> 
            <label><input type="radio" name="status_verifikasi" value="1" /> Terverifikasi </label><space>
            <label><input type="radio" name="status_verifikasi" value="0" /> Belum Terverifikasi </label>
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
