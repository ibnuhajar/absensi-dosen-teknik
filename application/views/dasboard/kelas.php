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
							<img src="<?= base_url('assets/img/') ?><?= $admin['foto'] ?>" class="user-image" alt="User Image">
							<!-- tag p di isi dengan nama user yang sedang login -->

							<span class="hidden-xs"><?= ucfirst($admin['nama']) ?> </span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<!-- pada tag img di isi oleh source img yang di upload dengan ukuran 160x160 -->
								<img src="<?= base_url('assets/img/') ?><?= $admin['foto'] ?>" class="img-circle" alt="User Image">

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
				<li class="active"><a href="<?= base_url('dasboard/kelas') ?>"><i class="fa fa-free-code-camp"></i> <span>Kelas</span></a></li>
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
				<div class="col-md-8">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Data Table Mata Kuliah</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Pengajar</th>
										<th>Mata kuliah</th>
										<th>Jurusan</th>
										<th>Pertemuan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($kelas as $k) : ?>
										<tr>
											<td><?= $no; ?> </td>
											<td><?= $k['dosen'] ?> </td>
											<td><?= $k['matakuliah'] ?></td>
											<td><?= $k['jurusan'] ?></td>
											<td><?= $k['absen'] ?></td>
											<td>
												<a href="<?= base_url('dasboard/print') ?>/<?= $k['id'] ?>" class="btn btn-success">
													<i class="fa fa-print"></i>
												</a>
												<button type="button" data-toggle="modal" data-target="#modal-default<?= $k['id'] ?>" class="btn btn-primary">
													<i class="fa fa-edit "></i>
												</button>
												<a href="<?= base_url('dasboard/k_delete') ?>/<?= $k['id'] ?>" class="btn btn-danger tombol-hapus">
													<i class="fa fa-trash"></i>
												</a>
											</td>
										</tr>

										<div class="modal fade" id="modal-default<?= $k['id'] ?>">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">
															<h2 class="text-center">Kelas <?= $k['matakuliah'] ?></h2>
															<hr>
															<h3 class="text-center">Data Kelas</h3>
															<ul>
																<li>
																	<h4>
																		<b>Nama Pengajar:</b>&nbsp;<?= $k['dosen'] ?>
																	</h4>
																</li>
																<li>
																	<h4>
																		<b>Nama Matakuliah:</b>&nbsp;<?= $k['matakuliah'] ?>
																	</h4>
																</li>
																<li>
																	<h4>
																		<b>Nama Jurusan:</b>&nbsp;<?= $k['jurusan'] ?>
																	</h4>
																</li>
																<li>
																	<h4>
																		<b>Pertemuan Ke:</b>&nbsp;<?= $k['absen'] ?>
																	</h4>
																</li>
															</ul>
														</h4>
													</div>
													<div class="modal-body">
														<form role="form" action="<?= base_url('dasboard/k_ubah') ?>" method="POST">
															<input type="hidden" name="id" value="<?= $k['id'] ?>">
															<div class="box-body">
																<div class="form-group">
																	<label for="matakuliah">Mata Kuliah</label>
																	<select name="matakuliah" id="matakuliah" class="form-control">
																		<?php foreach ($matakuliah as $mk) : ?>
																			<option value="<?= $mk['nama_mk'] ?>"><?= $mk['nama_mk'] ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>
																<div class="form-group">
																	<label for="pengajar">Pengajar</label>
																	<select name="pengajar" id="pengajar" class="form-control">
																		<?php foreach ($pengajar as $p) : ?>
																			<option value="<?= $p['nama_pengajar'] ?>"><?= $p['nama_pengajar'] ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>
																<div class="form-group">
																	<label for="jurusan">Jurusan</label>
																	<select name="jurusan" id="jurusan" class="form-control">
																		<?php foreach ($jurusan as $j) : ?>
																			<option value="<?= $j['nama_jurusan'] ?>"><?= $j['nama_jurusan'] ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>
																<div class="form-group">
																	<input type="hidden" name="absen" value="<?= $k['absen'] ?>">
																	<input type="hidden" name="date" value="<?= date('Y-m-d') ?>">
																</div>
															</div>
															<!-- /.box-body -->

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Save changes</button>
														</form>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- /.modal -->

										<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Pengajar</th>
										<th>Mata kuliah</th>
										<th>Semester</th>
										<th>Jurusan</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<div class="col-md-4">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Quick Example</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?= base_url('dasboard/k_tambah') ?>" method="POST">
							<div class="box-body">
								<div class="form-group">
									<label for="matakuliah">Mata Kuliah</label>
									<select name="matakuliah" id="matakuliah" class="form-control">
										<?php foreach ($matakuliah as $mk) : ?>
											<option value="<?= $mk['nama_mk'] ?>"><?= $mk['nama_mk'] ?> </option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="pengajar">Pengajar</label>
									<select name="pengajar" id="pengajar" class="form-control">
										<?php foreach ($pengajar as $p) : ?>
											<option value="<?= $p['nama_pengajar'] ?>"><?= $p['nama_pengajar'] ?> </option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="jurusan">Jurusan</label>
									<select name="jurusan" id="jurusan" class="form-control">
										<?php foreach ($jurusan as $j) : ?>
											<option value="<?= $j['nama_jurusan'] ?>"><?= $j['nama_jurusan'] ?> </option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<input type="hidden" name="absen" value="<?php 0 ?>">
									<input type="hidden" name="date" value="<?= date('Y-m-d') ?>">
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					<!-- /.box -->
					<!-- /.box-body -->
				</div>
			</div>
			<!-- /.col -->
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
