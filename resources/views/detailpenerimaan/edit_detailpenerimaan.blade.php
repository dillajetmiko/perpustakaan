@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | update detail penerimaan')

@section('title', 'Update Data Detail Penerimaan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/penerimaan">Penerimaan</a></li>
<li class="breadcrumb-item"><a href="/lihatdetailpenerimaan/{{ $detailpenerimaan[0]->id_penerimaan }}">Detail Penerimaan</a></li>
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

        <form action="/detailpenerimaan/updateDetailpenerimaan" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Id Penerimaan  : <input type="text" class="form-control" name="id_penerimaan" value ="{{ $detailpenerimaan[0]->id_penerimaan }}" readonly><br>
            No ISBN  : <input type="text" class="form-control" name="noISBN" value ="{{ $detailpenerimaan[0]->noISBN }}" readonly><br>
            Jumlah eksemplar perbuku : <input type="text" class="form-control" name="jumlah_eksemplar_perbuku" value="{{ $detailpenerimaan[0]->jumlah_eksemplar_perbuku }}"><br>
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