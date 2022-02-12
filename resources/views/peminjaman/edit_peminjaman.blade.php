@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Peminjaman')

@section('title', 'Update Data Peminjaman')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/peminjaman">Peminjaman</a></li>
<li class="breadcrumb-item active">Update Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Peminjaman</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">

        <form action="/peminjaman/updatePeminjaman" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Id Peminjaman  : <input type="text" class="form-control" name="id_peminjaman" value ="{{ $peminjaman[0]->id_peminjaman }}" readonly><br>
            NIS_NIP : 
            <select class="form-control" name="NIS_NIP">
            @foreach ($id as $anggota)
            @if ($anggota->NIS_NIP === $peminjaman[0]->NIS_NIP)
            <option value="{{ $anggota->NIS_NIP}}" selected>{{ $anggota->NIS_NIP}}</option>
            @else
            <option value="{{ $anggota->NIS_NIP}}">{{ $anggota->NIS_NIP}}</option>
            @endif
            @endforeach
            </select><br>
            NIP Pegawai:
            <select class="form-control" name="NIP">
            @foreach ($id2 as $pegawai)
            @if ($pegawai->NIP === $peminjaman[0]->NIP)
            <option value="{{ $pegawai->NIP}}" selected>{{ $pegawai->NIP}}</option>
            @else
            <option value="{{ $pegawai->NIP}}">{{ $pegawai->NIP}}</option>
            @endif
            @endforeach
            </select><br>
            Jumlah Buku : <input type="text" class="form-control" name="jumlah_buku" value="{{ $peminjaman[0]->jumlah_buku }}"><br>
            Tanggal Pinjam : <input type="date" class="form-control" name="tanggal_pinjam" value="{{ $peminjaman[0]->tanggal_pinjam }}"><br>
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