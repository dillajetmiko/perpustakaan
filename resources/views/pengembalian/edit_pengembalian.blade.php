@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Pengembalian')

@section('title', 'Update Data Pengembalian')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/pengembalian">Pengembalian</a></li>
<li class="breadcrumb-item active">Update Data</li>
@endsection

@section('content')

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pengembalian</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">

        <form action="/pengembalian/updatePengembalian" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            ID Peminjaman  : <input type="text" class="form-control" name="id_peminjaman" value ="{{ $pengembalian[0]->id_peminjaman }}" readonly><br>
            Kode Buku : <input type="text" class="form-control" name="kode_buku" value="{{ $pengembalian[0]->kode_buku }}" readonly><br>
            Denda Perbuku : <input type="text" class="form-control" name="denda_perbuku" value="{{ $pengembalian[0]->denda_perbuku }}"><br>
            Tanggal harus kembali : <input type="date" class="form-control" name="tanggal_haruskembali" value="{{ $pengembalian[0]->tanggal_haruskembali }}"><br>
            Tanggal kembali : <input type="date" class="form-control" name="tanggal_kembali" value="{{ $pengembalian[0]->tanggal_kembali }}"><br>
            Perpanjangan : <input type="text" class="form-control" name="perpanjangan" value="{{ $pengembalian[0]->perpanjangan }}"><br>
            Status Peminjaman : <br>
                @if ($pengembalian[0]->status_peminjaman == 0)
                <label><input type="radio" name="status_peminjaman" value="0" checked="checked"/> Dipinjam </label>
                <label><input type="radio" name="status_peminjaman" value="1" /> Kembali </label><br>
                @else
                <label><input type="radio" name="status_peminjaman" value="0" /> Dipinjam </label>
                <label><input type="radio" name="status_peminjaman" value="1" checked="checked"/> Kembali </label><br>
                @endif
                <br>
            Status Verifikasi : <br>
                @if ($pengembalian[0]->status_verifikasi == 1)
                <label><input type="radio" name="status_verifikasi" value="1" checked="checked"/> Terverifikasi </label>
                <label><input type="radio" name="status_verifikasi" value="0" /> Belum Terverifikasi </label><br>
                @else
                <label><input type="radio" name="status_verifikasi" value="1" /> Terverifikasi </label>
                <label><input type="radio" name="status_verifikasi" value="0" checked="checked"/> Belum Terverifikasi </label><br>
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