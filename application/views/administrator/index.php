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
							<img src="<?= base_url('assets/img/') ?><?= $admin['foto'] ?>"  class="user-image" alt="User Image">
							<!-- tag p di isi dengan nama user yang sedang login -->

							<span class="hidden-xs"><?= $admin['nama'] ?> </span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<!-- pada tag img di isi oleh source img yang di upload dengan ukuran 160x160 -->
								<img src="<?= base_url('assets/img/') ?><?= $admin['foto'] ?>"  class="img-circle" alt="User Image">

								<!-- tag p di isi dengan nama user yang sedang login -->
								<!-- pada tag p di isi oleh nama user dan di tag small tahun mengabdi -->
								<p>
									<?= ucfirst($admin['nama']) ?> - <?= $admin['role'] ?>
									<small><?= ucfirst($admin['alamat']) ?></small>
								</p>
							</li>

							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<!-- tag a untuk atribut href di isi dengan source edit profile -->
									<a href="<?= base_url('administrator') ?>" class="btn btn-default btn-flat">Profile</a>
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
					<img src="<?= base_url('assets/img/') ?><?= $admin['foto'] ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<!-- tag p di isi dengan nama user yang sedang login -->
					<p><?= ucfirst($admin['nama']) ?> </p>
					<!-- tag small di isi dengan dosen matakuliah -->
					<p><small><?= $admin['role'] ?></small></p>
				</div>
			</div>

			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">NAVIGASI UTAMA</li>
				<li><a href="<?= base_url('dasboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
				<li><a href="<?= base_url('dasboard/jurusan') ?>"><i class="fa fa-graduation-cap"></i> <span>Jurussan</span></a></li>
				<li><a href="<?= base_url('dasboard/pengajar') ?>"><i class="fa fa-users"></i> <span>Pengajar</span></a></li>
				<li><a href="<?= base_url('dasboard/matakuliah') ?>"><i class="fa fa-book"></i> <span>Mata Kuliah</span></a></li>
				<li><a href="<?= base_url('dasboard/kelas') ?>"><i class="fa fa-free-code-camp"></i> <span>Kelas</span></a></li>
				<li class="active"><a href="<?= base_url('administrator') ?>"><i class="fa fa-user"></i> <span>Admintrator</span></a></li>
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
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="box box-primary">
						<div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/') ?><?= $admin['foto'] ?>" alt="User profile picture">

							<h3 class="profile-username text-center"><?= $admin['nama'] ?> </h3>

							<p class="text-muted text-center"><?= $admin['role'] ?></p>

							<ul class="list-group list-group-unbordered">
								<li class="list-group-item">
									<b>Email</b> <a class="pull-right"><?= $admin['email'] ?></a>
								</li>
								<li class="list-group-item">
									<b>Username</b> <a class="pull-right"><?= $admin['username'] ?></a>
								</li>
								<li class="list-group-item">
									<b>Role</b> <a class="pull-right"><?= $admin['role'] ?></a>
								</li>
							</ul>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->

					<!-- About Me Box -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">About Admin</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<strong><i class="fa fa-book margin-r-5"></i> Pendidikan</strong>

							<p class="text-muted">
								<?= $admin['pendidikan'] ?>
							</p>

							<hr>

							<strong><i class="fa fa-map-marker margin-r-5"></i>Alamat</strong>

							<p class="text-muted">
								<?= $admin['alamat'] ?>
							</p>

							<hr>

							<strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

							<p>
								<?= $admin['note'] ?>
							</p>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<div class="col-md-9">

					<div class="box box-primary nav-tabs-custom">
						<div class="box-header">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#profile" data-toggle="tab">Admin Profile</a></li>
								<li><a href="#reset" data-toggle="tab">Admin Reset</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="box-body active tab-pane" id="profile">
								<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= base_url('administrator/admin') ?>">
									<div class="form-group">
										<input type="hidden" name="id" value="<?= 1 ?>">
										<label for="nama" class="col-sm-2 control-label">Nama</label>

										<div class="col-sm-10">
											<input type="text" class="form-control" name="nama" id="nama" placeholder="Name">
											<small class="text-red"><?= form_error('nama'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>

										<div class="col-sm-10">
											<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											<small class="text-red"><?= form_error('email'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="username" class="col-sm-2 control-label">Username</label>

										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" id="username" placeholder="Username">
											<small class="text-red"><?= form_error('username'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>

										<div class="col-sm-10">
											<input type="password" class="form-control" name="password" id="password" placeholder="Password">
											<small class="text-red"><?= form_error('password'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>

										<div class="col-sm-10">
											<textarea class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan"></textarea>
											<small class="text-red"><?= form_error('pendidikan'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="alamat" class="col-sm-2 control-label">Alamat</label>

										<div class="col-sm-10">
											<textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
											<small class="text-red"><?= form_error('alamat'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="note" class="col-sm-2 control-label">Notes</label>

										<div class="col-sm-10">
											<textarea class="form-control" name="note" id="note" placeholder="Note"></textarea>
											<small class="text-red"><?= form_error('note'); ?></small>
										</div>
									</div>

									<div class="form-group">
										<input type="hidden" name="role" value="<?php echo 'Administrator' ?>">
										<input type="hidden" name="date" value="<?= date('Y-m-d') ?>">
										<label for="foto" class="col-sm-2 control-label">File Foto</label>
										<div class="col-sm-10">
											<input type="file" name="foto" id="foto">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<div class="box-body tab-pane" id="reset">
								<form class="form-horizontal" method="POST" action="<?= base_url('administrator/reset') ?>">
									<div class="form-group">
										<input type="hidden" name="id" value="<?= 1 ?>">
										<label for="username" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" id="username" placeholder="Username">
											<small class="text-red"><?= form_error('username'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>

										<div class="col-sm-10">
											<input type="text" class="form-control" name="password" id="password" placeholder="Password">
											<small class="text-red"><?= form_error('password'); ?></small>

										</div>
									</div>
									<div class="form-group">
										<label for="repassword" class="col-sm-2 control-label">Repassword</label>

										<div class="col-sm-10">
											<input type="text" class="form-control" name="repassword" id="repassword" placeholder="Username">
											<small class="text-red"><?= form_error('repassword'); ?></small>
										</div>
									</div>
									<div class="form-group">
										<input type="hidden" name="date" value="<?= date('Y-m-d') ?>">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
		</section>
		<!-- /.row -->
		<!-- Main row -->
		<!-- /.row (main row) -->
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
	<!-- ./wrapper -->

</div>
