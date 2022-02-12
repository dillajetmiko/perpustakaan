<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('asset/dist/img/tenoritaiga.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Admin</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
	<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
		
		<li class="nav-item">
		@if($menu == 'Home')
			<a href="/home" class="nav-link active">
		@else
			<a href="/home" class="nav-link">
		@endif
				<i class="nav-icon fa fa-home"></i>
				<p>
				Homes
			
				</p>
			</a>
		</li>

	@if($menu == 'data_master')  
		<li class="nav-item has-treeview menu-open">
			<a href="#" class="nav-link active">
	@else
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link ">  
	@endif
		
				<i class="fab fa-buffer nav-icon"></i>
				<p>
				Data Master
				<i class="fas fa-angle-left right"></i>

				</p>
			</a>

			<ul class="nav nav-treeview">
					
				<li class="nav-item">
				@if($submenu == 'jenisbuku')
					<a href="/jenisbuku" class="nav-link active">
				@else
					<a href="/jenisbuku" class="nav-link ">
				@endif
						<i class="far fa-circle nav-icon"></i>
						<p>Jenis Buku</p>
					</a>
				</li>

				<li class="nav-item">
				@if($submenu == 'penerbit')
					<a href="/penerbit" class="nav-link active">
				@else
					<a href="/penerbit" class="nav-link ">
				@endif
						<i class="far fa-circle nav-icon"></i>
						<p>Penerbit</p>
					</a>
				</li>

				<li class="nav-item">
				@if($submenu == 'bahasa')
					<a href="/bahasa" class="nav-link active">
				@else
					<a href="/bahasa" class="nav-link ">
				@endif
						<i class="far fa-circle nav-icon"></i>
						<p>Bahasa</p>
					</a>
				</li>

				<li class="nav-item">
				@if($submenu == 'anggota')
					<a href="/anggota" class="nav-link active">
				@else
					<a href="/anggota" class="nav-link ">
				@endif
						<i class="far fa-circle nav-icon"></i>
						<p>Anggota</p>
					</a>
				</li>

				<li class="nav-item">
				@if($submenu == 'pegawai')
					<a href="/pegawai" class="nav-link active">
				@else
					<a href="/pegawai" class="nav-link ">
				@endif
						<i class="far fa-circle nav-icon"></i>
						<p>Pegawai</p>
					</a>
				</li>
				
			</ul>
		</li>

		<li class="nav-item">
		@if($menu == 'Buku')
			<a href="/buku" class="nav-link active">
		@else
			<a href="/buku" class="nav-link">
		@endif
				<i class="nav-icon fa fa-book"></i>
				<p>
				Buku
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'Eksemplar_buku')
			<a href="/eksemplarbuku" class="nav-link active">
		@else
			<a href="/eksemplarbuku" class="nav-link ">
		@endif
				<i class="nav-icon fas fa-clone"></i>
				<p>Eksemplar Buku</p>
			</a>
		</li>


		<li class="nav-item">
		@if($menu == 'Penerimaan')
			<a href="/penerimaan" class="nav-link active">
		@else
			<a href="/penerimaan" class="nav-link">
		@endif
				<i class="nav-icon fas fa-archive"></i>
				<p>
				Penerimaan
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'Peminjaman')
			<a href="/peminjaman" class="nav-link active">
		@else
			<a href="/peminjaman" class="nav-link">
		@endif
				<i class="nav-icon fas fa-book-reader"></i>
				<p>
				Peminjaman
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'Pengembalian')
			<a href="/pengembalian" class="nav-link active">
		@else
			<a href="/pengembalian" class="nav-link">
		@endif
				<i class="nav-icon fas fa-book-open"></i>
				<p>
				Pengembalian
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'History')
			<a href="/history" class="nav-link active">
		@else
			<a href="/history" class="nav-link">
		@endif
				<i class="nav-icon fas fa-history"></i>
				<p>
				History Buku
			
				</p>
			</a>
		</li>

		<li class="nav-item">
		@if($menu == 'History1')
			<a href="/history1" class="nav-link active">
		@else
			<a href="/history1" class="nav-link">
		@endif
				<i class="nav-icon fas fa-history"></i>
				<p>
				History Anggota
			
				</p>
			</a>
		</li>
		

  	</ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->