@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Pegawai')

@section('title', 'Pegawai')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item active">Pegawai</li>
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
        <h3 class="card-title">Pegawai</h3>

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
            <h3 class="card-title">Tabel Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Username</th>
                    <!-- <th>Password</th> -->
                    <th>Status Pegawai</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $data)
                    <tr>
                        <td>{{ $data->NIP }}</td>
                        <td>{{ $data->nama_pegawai }}</td>
                        <td>{{ $data->username }}</td>
                        <!-- <td>{{ $data->password_pegawai }}</td> -->
                        <td>{{ $data->status_pegawai }}</td>
                        <td><a href='/pegawai/editPegawai/{{ $data->NIP }}'>
                        <button> edit </button> 
                        </a>    
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Username</th>
                    <!-- <th>Password</th> -->
                    <th>Status Pegawai</th>
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
        <a href="/pegawai/tambahPegawai">
        <i class="fas fa-plus"></i><b> Tambah Pegawai<b>
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