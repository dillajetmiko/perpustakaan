@extends('layout.mainlayout')

@section('page_title', 'Perpustakaan | Home')

@section('title', 'Perpustakaan Sekolah')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
<!-- Default box -->
<div class="card">
  	<div class="card-header">
      <h3 class="card-title">Home</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
		<!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>History</h3>

                <p>Berdasarkan Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-history"></i>
              </div>
              <a href="/history" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>History</h3>

                <p>Berdasarkan Anggota</p>
              </div>
              <div class="icon">
                <i class="fas fa-history"></i>
              </div>
              <a href="/history1" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		  <!-- ./col -->
		</div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection

<script>
	function getVal(event)
	{
        if(event.keyCode >= 48 && event.keyCode <= 57)
        {        
            // var text = document.getElementById('myText').value;
            // alert(text);
            console.log(event.key);
            return true;
        }
        else 
        {
            return false;
        }
    }

    function modal()
    {
        if(event.keyCode == 13)
        {
            $("#ModalCenter").modal("show");
        }
    } 
</script>