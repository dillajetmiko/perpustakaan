@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Anggota')

@section('title', 'Anggota')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item active">Anggota</li>
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
        <h3 class="card-title">Anggota</h3>

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
            <h3 class="card-title">Tabel Anggota</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>NIS_NIP</th>
                    <th>Nama Anggota</th>
                    <th>Tahun Masuk</th>
                    <th>Kelas</th>
                    <th>Username Anggota</th>
                    <!-- <th>Password</th> -->
                    <th>Status Anggota</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($anggota as $data)
                    <tr>
                        <td>{{ $data->NIS_NIP }}</td>
                        <td>{{ $data->nama_anggota }}</td>
                        <td>{{ $data->tahun_masuk }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td>{{ $data->username_anggota }}</td>
                        <!-- <td>{{ $data->password_anggota }}</td> -->
                        <td>{{ $data->status_anggota }}</td>
                        <td><a href='/anggota/editAnggota/{{ $data->NIS_NIP }}'>
                        <button> edit </button>
                        </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NIS_NIP</th>
                    <th>Nama Anggota</th>
                    <th>Tahun Masuk</th>
                    <th>Kelas</th>
                    <th>Username Anggota</th>
                    <!-- <th>Password</th> -->
                    <th>status_anggota</th>
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
        <a href="/anggota/tambahAnggota">
        <i class="fas fa-plus"></i><b> Tambah Anggota<b>
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