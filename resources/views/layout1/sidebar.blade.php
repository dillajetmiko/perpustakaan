<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('asset/dist/img/tenoritaiga.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Anggota</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
		
		<li class="nav-item">
		@if($menu == 'Home')
			<a href="/halamansiswa" class="nav-link active">
		@else
			<a href="/halamansiswa" class="nav-link">
		@endif
				<i class="nav-icon fa fa-home"></i>
				<p>
				Homes
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'Buku')
			<a href="/halamansiswa/buku" class="nav-link active">
		@else
			<a href="/halamansiswa/buku" class="nav-link">
		@endif
				<i class="nav-icon fa fa-book"></i>
				<p>
				Buku
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'History')
			<a href="/halamansiswa/history" class="nav-link active">
		@else
			<a href="/halamansiswa/history" class="nav-link">
		@endif
				<i class="nav-icon fa fa-book"></i>
				<p>
				History Peminjaman
			
				</p>
			</a>
		</li>
		

  	</ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->