@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Penerimaan')

@section('title', 'Update Data Penerimaan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/penerimaan">Penerimaan</a></li>
<li class="breadcrumb-item active">Update Data</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Penerimaan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">

        <form action="/penerimaan/updatePenerimaan" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            ID Penerimaan  : <input type="text" class="form-control" name="id_penerimaan" value ="{{ $penerimaan[0]->id_penerimaan }}" readonly><br>
            Asal : 
            <select class="form-control" name="id_asal">
            @foreach ($id as $asal)
            @if ($asal->id_asal === $penerimaan[0]->id_asal)
            <option value="{{ $asal->id_asal}}" selected>{{ $asal->asal}}</option>
            @else
            <option value="{{ $asal->id_asal}}">{{ $asal->asal}}</option>
            @endif
            @endforeach
            </select><br>
            Pegawai : 
            <select class="form-control" name="NIP">
            @foreach ($id2 as $pegawai)
            @if ($pegawai->NIP === $penerimaan[0]->NIP)
            <option value="{{ $pegawai->NIP}}" selected>{{ $pegawai->nama_pegawai}}</option>
            @else
            <option value="{{ $pegawai->NIP}}">{{ $pegawai->nama_pegawai}}</option>
            @endif
            @endforeach
            </select><br>
            Tanggal penerimaan : <input type="date" class="form-control" name="tanggal_penerimaan" value="{{ $penerimaan[0]->tanggal_penerimaan }}"><br>
            Jumlah buku diterima : <input type="text" class="form-control" name="jumlah_buku_diterima" value="{{ $penerimaan[0]->jumlah_buku_diterima }}"><br>
            Keterangan : <input type="text" class="form-control" name="keterangan" value="{{ $penerimaan[0]->keterangan }}"><br>
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