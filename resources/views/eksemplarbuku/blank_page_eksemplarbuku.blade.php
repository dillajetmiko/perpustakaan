@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Eksemplar Buku')

@section('title', 'Eksemplar Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item active">Eksemplar Buku</li>
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
        <h3 class="card-title">Eksemplar Buku</h3>

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
            <h3 class="card-title">Tabel Eksemplar Buku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>No ISBN</th>
                    <th>Judul Buku</th>
                    <th>Status Eksemplar Buku</th>
                    <th>Kondisi Eksemplar Buku</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($eksemplarbuku as $data)
                    <tr>
                        <td>{{ $data->kode_buku }}</td>
                        <td>{{ $data->noISBN }}</td>
                        <td>{{ $data->judul_buku }}</td>
                        @if ($data->status_eksemplar_buku == 1)
                        <td>Tersedia</td>
                        @else
                        <td>Tidak Tersedia</td>
                        @endif
                        @if ($data->kondisi_eksemplar_buku == 0)
                        <td>Buruk</td>
                        @else
                        <td>Bagus</td>
                        @endif
                        <td><a href='/eksemplarbuku/editEksemplarbuku/{{ $data->kode_buku }}'>
                        <button> edit </button>
                        </a>
                        <a href='/eksemplarbuku/hapus/{{ $data->kode_buku }}'>
                        <button> hapus </button> 
                        </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Kode Buku</th>
                    <th>No ISBN</th>
                    <th>Judul Buku</th>
                    <th>Status Eksemplar Buku</th>
                    <th>Kondisi Eksemplar Buku</th>
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
        <a href="/eksemplarbuku/tambahEksemplarbuku">
        <i class="fas fa-plus"></i><b> Tambah Eksemplar Buku<b>
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