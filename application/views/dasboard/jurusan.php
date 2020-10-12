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
				<li><a href="<?= base_url('dasboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
				<li class="active"><a href="<?= base_url('dasboard/jurusan') ?>"><i class="fa fa-graduation-cap"></i> <span>Jurussan</span></a></li>
				<li><a href="<?= base_url('dasboard/pengajar') ?>"><i class="fa fa-users"></i> <span>Pengajar</span></a></li>
				<li><a href="<?= base_url('dasboard/matakuliah') ?>"><i class="fa fa-book"></i> <span>Mata Kuliah</span></a></li>
				<li><a href="<?= base_url('dasboard/kelas') ?>"><i class="fa fa-free-code-camp"></i> <span>Kelas</span></a></li>
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

			<!-- insert jurusan beserta penjelasan nya -->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<!-- SELECT2 EXAMPLE -->
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">Update Jurusan</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<!-- action di isi route untuk update jurusan -->
							<form action="<?= base_url('dasboard/j_ubah') ?>" method="post">
								<div class="form-group">
									<label for="namajurusan">Nama Jurusan</label>
									<select name="namajurusan" id="namajurusan" class="form-control">
										<?php foreach ($jurusan as $j) : ?>
											<option value="<?= $j['nama_jurusan'] ?>"><?= $j['nama_jurusan'] ?> </option>
										<?php endforeach; ?>
									</select>
								</div>
								<!-- /.form-group -->

								<div class="form-group">
									<label for="urljurusan">Link Home Jurusan</label>
									<input type="text" class="form-control" name="urljurusan" id="urljurusan" placeholder="Masukkan Link Home Jurusan ...">
								</div>
								<!-- /.form-group -->

								<div class="form-group">
									<input type="hidden" name="date" value="<?= date('Y-m-d'); ?>">
									<label>Deskripsi Jurusan</label>
									<div class="box-body pad">
										<textarea class="textarea" name="deskripsi" placeholder="Masukkan Deskripsi disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
								<!-- /.form-group -->
								<button type="submit" class="btn btn-block btn-primary">Submit</button>
							</form>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							Klik di sini <a href="<?= base_url('dokumentasi') ?>"> documentation</a> untuk mengetahui cara menambah jurusan
						</div>
					</div>
					<!-- /.box -->
				</div>
			</div>



			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-6 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<!-- diisi dengan jurusan -->
							<p>Teknik</p>
							<h3><?= $jurusan[0]['nama_jurusan']; ?></h3>
						</div>
						<div class="icon">
							<!-- icon untuk jurusan  -->
							<i class="ion ion-university"></i>
						</div>

						<div class="box box-solid">
							<!-- /.box-header -->
							<div class="box-body">
								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-danger">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Tentang Jurusan
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="box-body text-muted">
												<!-- isi nya sejarah singkat tentang jurusan -->
												<?= $jurusan[0]['deskripsi_jurusan']; ?>
												<span> selengkap nya <a href="<?= $jurusan[0]['url_jurusan']; ?>">di sini!!</a> </span>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-6 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<!-- diisi dengan jurusan -->
							<p>Teknik</p>
							<h3><?= $jurusan[1]['nama_jurusan']; ?></h3>
						</div>
						<div class="icon">
							<!-- icon untuk jurusan  -->
							<i class="ion ion-university"></i>
						</div>

						<div class="box box-solid">
							<!-- /.box-header -->
							<div class="box-body">
								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													Tentang Jurusan
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="box-body text-muted">
												<!-- isi nya sejarah singkat tentang jurusan -->
												<?= $jurusan[1]['deskripsi_jurusan']; ?>
												<span> selengkap nya <a href="<?= $jurusan[1]['url_jurusan']; ?>">di sini!!</a> </span>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->

			<div class="row">
				<div class="col-lg-6 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<!-- diisi dengan jurusan -->
							<p>Teknik</p>
							<h3><?= $jurusan[2]['nama_jurusan']; ?></h3>
						</div>
						<div class="icon">
							<!-- icon untuk jurusan  -->
							<i class="ion ion-university"></i>
						</div>

						<div class="box box-solid">
							<!-- /.box-header -->
							<div class="box-body">
								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-success">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Tentang Jurusan
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="box-body text-muted">
												<!-- isi nya sejarah singkat tentang jurusan -->
												<?= $jurusan[2]['deskripsi_jurusan']; ?>
												<span> selengkap nya <a href="<?= $jurusan[2]['url_jurusan']; ?>">di sini!!</a> </span>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>
				</div>
				<!-- ./col -->

				<div class="col-lg-6 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<!-- diisi dengan jurusan -->
							<p>Teknik</p>
							<h3><?= $jurusan[3]['nama_jurusan']; ?></h3>
						</div>
						<div class="icon">
							<!-- icon untuk jurusan  -->
							<i class="ion ion-university"></i>
						</div>

						<div class="box box-solid">
							<!-- /.box-header -->
							<div class="box-body">
								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-warning">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
													Tentang Jurusan
												</a>
											</h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="box-body text-muted">
												<!-- isi nya sejarah singkat tentang jurusan -->
												<?= $jurusan[3]['deskripsi_jurusan']; ?>
												<span> selengkap nya <a href="<?= $jurusan[3]['url_jurusan']; ?>">di sini!!</a> </span>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->

			<div class="row">
				<div class="col-lg-6 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-orange">
						<div class="inner">
							<!-- diisi dengan jurusan -->
							<p>Teknik</p>
							<h3> <?= $jurusan[4]['nama_jurusan']; ?> </h3>
						</div>
						<div class="icon">
							<!-- icon untuk jurusan  -->
							<i class="ion ion-university"></i>
						</div>

						<div class="box box-solid">
							<!-- /.box-header -->
							<div class="box-body">
								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-warning">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
													Tentang Jurusan
												</a>
											</h4>
										</div>
										<div id="collapseFive" class="panel-collapse collapse">
											<div class="box-body text-muted">
												<!-- isi nya sejarah singkat tentang jurusan -->
												<?= $jurusan[4]['deskripsi_jurusan']; ?>
												<span> selengkap nya <a href="<?= $jurusan[4]['url_jurusan']; ?>">di sini!!</a> </span>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- /.box-body -->
						</div>

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
