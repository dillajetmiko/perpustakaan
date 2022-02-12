@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update Eksemplar Buku')

@section('title', 'Update Data Eksemplar Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/eksemplarbuku">Eksemplar Buku</a></li>
<li class="breadcrumb-item active">Update Data</li>
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

        <form action="/eksemplarbuku/updateEksemplarbuku" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Kode Buku  : <input type="text" class="form-control" name="kode_buku" value ="{{ $eksemplarbuku[0]->kode_buku }}" readonly><br>
            No ISBN : 
            <select class="form-control" name="noISBN">
            @foreach ($id as $buku)
            @if ($buku->noISBN === $eksemplarbuku[0]->noISBN)
            <option value="{{ $buku->noISBN}}" selected>{{ $buku->noISBN}}</option>
            @else
            <option value="{{ $buku->noISBN}}">{{ $buku->noISBN}}</option>
            @endif
            @endforeach
            </select><br>
            Status eksemplar buku : <br>
                @if ($eksemplarbuku[0]->status_eksemplar_buku == 1)
                <label><input type="radio" name="status_eksemplar_buku" value="1" checked="checked"/> Tersedia </label>
                <label><input type="radio" name="status_eksemplar_buku" value="0" /> Tidak Tersedia </label><br>
                @else
                <label><input type="radio" name="status_eksemplar_buku" value="1" /> Tersedia </label>
                <label><input type="radio" name="status_eksemplar_buku" value="0" checked="checked"/> Tidak Tersedia </label><br>
                @endif
                <br>
            Kondisi eksemplar buku : <br>
                @if ($eksemplarbuku[0]->kondisi_eksemplar_buku == 1)
                <label><input type="radio" name="kondisi_eksemplar_buku" value="1" checked="checked"/> Bagus </label>
                <label><input type="radio" name="kondisi_eksemplar_buku" value="0" /> Buruk </label><br>
                @else
                <label><input type="radio" name="kondisi_eksemplar_buku" value="1" /> Bagus </label>
                <label><input type="radio" name="kondisi_eksemplar_buku" value="0" checked="checked"/> Buruk </label><br>
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