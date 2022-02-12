@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Buku')

@section('title', 'Buku')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item active">Buku</li>
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
        <h3 class="card-title">Buku</h3>

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
            <h3 class="card-title">Tabel Buku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No ISBN</th>
                    <th>Bahasa</th>
                    <th>Penerbit</th>
                    <th>Jenis Buku</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis</th>
                    <th>Cetakan ke</th>
                    <th>Harga</th>
                    <th>Jumlah Eksemplar</th>
                    <th>Kategori Buku</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($buku as $data)
                    <tr>
                        <td>{{ $data->noISBN }}</td>
                        <td>{{ $data->nama_bahasa }}</td>
                        <td>{{ $data->nama_penerbit }}</td>
                        <td>{{ $data->nama_jenisbuku }}</td>
                        <td>{{ $data->judul_buku }}</td>
                        <td>{{ $data->tahun_terbit }}</td>
                        <td>{{ $data->penulis }}</td>
                        <td>{{ $data->cetakan_ke }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->jumlah_eksemplar }}</td>
                        @if ($data->kategori_buku == 1)
                        <td>Non Fiksi</td>
                        @else
                        <td>Fiksi</td>
                        @endif
                        <td><a href='/buku/editBuku/{{ $data->noISBN }}'>
                        <button> edit </button>
                        </a>
                        <a href='/buku/hapus/{{ $data->noISBN }}'>
                        <button> hapus </button> 
                        </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No ISBN</th>
                    <th>Id Bahasa</th>
                    <th>Id Penerbit</th>
                    <th>Id Jenis</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis</th>
                    <th>Cetakan ke</th>
                    <th>Harga</th>
                    <th>Jumlah Eksemplar</th>
                    <th>Kategori Buku</th>
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
        <a href="/buku/tambahBuku">
        <i class="fas fa-plus"></i><b> Tambah Buku<b>
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