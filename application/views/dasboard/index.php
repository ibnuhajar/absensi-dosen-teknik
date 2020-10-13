<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="<?= base_url(); ?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>F</b>T</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>F</b>&nbsp; TEKNIK</span>
		</a>

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">

					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

							<!-- pada tag img di isi oleh source img yang di upload dengan ukuran 160x160 -->
							<img src="<?= base_url('assets/adminLTE/') ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
							<!-- tag p di isi dengan nama user yang sedang login -->

							<span class="hidden-xs">Alexander Pierce</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<!-- pada tag img di isi oleh source img yang di upload dengan ukuran 160x160 -->
								<img src="<?= base_url('assets/adminLTE/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

								<!-- tag p di isi dengan nama user yang sedang login -->
								<!-- pada tag p di isi oleh nama user dan di tag small tahun mengabdi -->
								<p>
									Alexander Pierce - Web Developer
									<small>Member since Nov. 2012</small>
								</p>
							</li>

							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<!-- tag a untuk atribut href di isi dengan source edit profile -->
									<a href="#" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<!--di tag a untuk atribut href di isi dengan source logout  -->
									<a href="#" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>

				</ul>
			</div>
		</nav>
	</header>

	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<!-- tag img di isi dengan source upload foto -->
					<img src="<?= base_url('assets/adminLTE/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<!-- tag p di isi dengan nama user yang sedang login -->
					<p>Alexander Pierce</p>
					<!-- tag small di isi dengan dosen matakuliah -->
					<p><small>Dosen Mk</small></p>
				</div>
			</div>

			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">NAVIGASI UTAMA</li>
				<li class="active"><a href="<?= base_url('dasboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
				<li><a href="<?= base_url('dasboard/jurusan') ?>"><i class="fa fa-graduation-cap"></i> <span>Jurussan</span></a></li>
				<li><a href="<?= base_url('dasboard/pengajar') ?>"><i class="fa fa-users"></i> <span>Pengajar</span></a></li>
				<li><a href="<?= base_url('dasboard/matakuliah') ?>"><i class="fa fa-book"></i> <span>Mata Kuliah</span></a></li>
				<li><a href="<?= base_url('dasboard/kelas') ?>"><i class="fa fa-free-code-camp"></i> <span>Kelas</span></a></li>
				<li><a href="<?= base_url('administrator') ?>"><i class="fa fa-user"></i> <span>Admintrator</span></a></li>
				<li><a href="<?= base_url('dasboard/konfigurasi') ?>"><i class="fa fa-cogs"></i> <span>Konfigurasi</span></a></li>
				<li><a href="<?= base_url('dasboard/dokumentasi') ?>"><i class="fa fa-info-circle"></i> <span>Documentasi</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				<?= $page; ?>
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?= base_url() ?>"> <i class="fa fa-dashboard"></i>Home</a></li>
				<!-- li di bawah di isi oleh page yang di pilih -->
				<li class="active"><?= $page; ?> </li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('massage'); ?>"></div>
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<!-- jumlah jurusan -->
							<h3><?= $jurusan; ?> </h3>

							<p>Jurusan</p>
						</div>
						<div class="icon">
							<!-- icon untuk jurusan  -->
							<i class="ion ion-university"></i>
						</div>
						<a href="<?= base_url('dasboard/jurusan'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<!-- di isi dengan jumlah Mata Kuliah -->
							<h3><?= $matakuliah; ?> </h3>
							<p>Mata Kuliah</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="<?= base_url('dasboard/matakuliah'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<!-- jumlah dosen  -->
							<h3><?= $dosen; ?> </h3>

							<p>Dosen Fakultas Teknik</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-stalker"></i>
						</div>
						<a href="<?= base_url('dasboard/pengajar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-3 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<!-- admin aplikasi -->
							<h3>65</h3>

							<p>Administrator</p>
						</div>
						<div class="icon">
							<i class="ion ion-person"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->

			</div>
			<!-- /.row -->
			<!-- Main row -->
			<!-- /.row (main row) -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 1.0.0
		</div>
		<strong>Copyright &copy; <?= date('Y') ?> <a href="https://ft.uisu.ac.id/">Fakultas Teknik</a>.</strong> All rights
		reserved.
	</footer>


	<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->
