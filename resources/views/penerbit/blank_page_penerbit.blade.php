@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Penerbit')

@section('title', 'Penerbit')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item active">Penerbit</li>
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
        <h3 class="card-title">Penerbit</h3>

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
            <h3 class="card-title">Tabel Penerbit</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Alamat</th>
                    <th>No.telp</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($penerbit as $data)
                    <tr>
                        <td>{{ $data->id_penerbit }}</td>
                        <td>{{ $data->nama_penerbit }}</td>
                        <td>{{ $data->alamat_penerbit }}</td>
                        <td>{{ $data->no_telp_penerbit }}</td>
                        <td>{{ $data->email_penerbit }}</td>
                        <td><a href='/penerbit/editPenerbit/{{ $data->id_penerbit }}'>
                        <button> edit </button>
                        <!-- </a>
                        <a href='/penerbit/hapus/{{ $data->id_penerbit }}'>
                        <button> hapus </button> 
                        </a> -->
                        </td>
                    
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Id Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Alamat</th>
                    <th>No.telp</th>
                    <th>Email</th>
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
        <a href="/penerbit/tambahPenerbit">
        <i class="fas fa-plus"></i><b> Tambah Penerbit<b>
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