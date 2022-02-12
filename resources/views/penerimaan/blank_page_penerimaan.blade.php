@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Penerimaan')

@section('title', 'Penerimaan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item active">Penerimaan</li>
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
        <h3 class="card-title">Penerimaan</h3>

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
            <h3 class="card-title">Tabel Penerimaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID Penerimaan</th>
                    <th>Asal</th>
                    <th>NIP</th>
                    <th>Tanggal Penerimaan</th>
                    <th>Jumlah Buku Diterima</th>
                    <th>Keterangan</th>
                    <th>Tambah Detail</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($penerimaan as $data)
                    <tr>
                        <td>{{ $data->id_penerimaan }}</td>
                        <td>{{ $data->asal }}</td>
                        <td>{{ $data->NIP }}</td>
                        <td>{{ $data->tanggal_penerimaan }}</td>
                        <td>{{ $data->jumlah_buku_diterima }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>
                        <a href='/lihatdetailpenerimaan/{{ $data->id_penerimaan }}'>
                        detail penerimaan
                        </a>
                        </td>
                        <td><a href='/penerimaan/editPenerimaan/{{ $data->id_penerimaan }}'>
                        <button> edit </button>
                        </a>
                        <a href='/penerimaan/hapus/{{ $data->id_penerimaan }}'>
                        <button> hapus </button> 
                        </a>
                        </td>  
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Penerimaan</th>
                    <th>ID Asal</th>
                    <th>NIP</th>
                    <th>Tanggal Penerimaan</th>
                    <th>Jumlah Buku Diterima</th>
                    <th>Keterangan</th>
                    <th></th>
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
    <div class="card-footer">
        <a href="/penerimaan/tambahPenerimaan">
        <i class="fas fa-plus"></i><b> Tambah Penerimaan<b>
        </a>
    </div>
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