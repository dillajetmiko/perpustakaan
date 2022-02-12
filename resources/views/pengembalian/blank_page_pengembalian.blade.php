@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Pengembalian')

@section('title', 'Pengembalian')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/home">Home</a></li>
<li class="breadcrumb-item"><a href="/peminjaman">Peminjaman</a></li>
<li class="breadcrumb-item active">Pengembalian</li>
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
        <h3 class="card-title">Pengembalian</h3>

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
            <h3 class="card-title">Tabel Pengembalian</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Kode Buku</th>
                    <th>Denda Perbuku</th>
                    <th>Tanggal harus kembali</th>
                    <th>Tanggal Kembali</th>
                    <th>Perpanjangan</th>
                    <th>Status Peminjaman</th>
                    <th>Status Verifikasi</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($pengembalian as $data)
                    <tr>
                        <td>{{ $data->id_peminjaman }}</td>
                        <td>{{ $data->kode_buku }}</td>
                        <td>{{ $data->denda_perbuku }}</td>
                        <td>{{ $data->tanggal_haruskembali }}</td>
                        <td>{{ $data->tanggal_kembali }}</td>
                        <td>{{ $data->perpanjangan }}</td>
                        @if ($data->status_peminjaman == 0)
                        <td>Dipinjam</td>
                        @else
                        <td>Kembali</td>
                        @endif
                        <td>{{ $data->status_verifikasi }}</td>
                        <td><a href='/pengembalian/editPengembalian/{{ $data->id_peminjaman }}/{{ $data->kode_buku }}'>
                        <button> edit </button>
                        </a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Kode Buku</th>
                    <th>Denda Perbuku</th>
                    <th>Tanggal harus kembali</th>
                    <th>Tanggal Kembali</th>
                    <th>Perpanjangan</th>
                    <th>Status Peminjaman</th>
                    <th>Status Verifikasi</th>
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
        <!-- <a href="/detailpeminjaman/tambahDetailpeminjaman"><b>Tambah Pengembalian<b></a> -->
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