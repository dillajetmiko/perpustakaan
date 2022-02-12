@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Detail Penerimaan')

@section('title', 'Detail Penerimaan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/penerimaan">Penerimaan</a></li>
<li class="breadcrumb-item active">Detail Penerimaan</li>
@endsection

@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('asset/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail Penerimaan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Tabel Detail Penerimaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID Penerimaan</th>
                    <th>No ISBN</th>
                    <th>Jumlah eksemplar perbuku</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($detailpenerimaan as $data)
                    <tr>
                        <td>{{ $data->id_penerimaan }}</td>
                        <td>{{ $data->noISBN }}</td>
                        <td>{{ $data->jumlah_eksemplar_perbuku }}</td>
                        <td><a href='/detailpenerimaan/editDetailpenerimaan/{{ $data->id_penerimaan }}&{{ $data->noISBN }}'>
                        <button> edit </button>
                        </a>
                        <a href='/detailpenerimaan/hapus/{{ $data->id_penerimaan }}&{{ $data->noISBN }}'>
                        <button> hapus </button> 
                        </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Penerimaan</th>
                    <th>No ISBN</th>
                    <th>Jumlah eksemplar perbuku</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.card-body -->
    @foreach($penerimaan as $terima)
    <div class="card-footer">
        <a href="/detailpenerimaan/tambahDetailpenerimaan/{{ $terima->id_penerimaan }}">
        <i class="fas fa-plus"></i><b> Tambah detail penerimaan<b>
        </a>
    </div>
    @endforeach
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection

@section('custom_script')
<!-- DataTables -->
<script src="{{ asset('asset/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('asset/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('asset/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection