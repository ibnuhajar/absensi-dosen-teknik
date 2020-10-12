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
				<li><a href="<?= base_url('dasboard/jurusan') ?>"><i class="fa fa-graduation-cap"></i> <span>Jurussan</span></a></li>
				<li><a href="<?= base_url('dasboard/pengajar') ?>"><i class="fa fa-users"></i> <span>Pengajar</span></a></li>
				<li class="active"><a href="<?= base_url('dasboard/matakuliah') ?>"><i class="fa fa-book"></i> <span>Mata Kuliah</span></a></li>
				<li><a href="<?= base_url('dasboard/kelas') ?>"><i class="fa fa-free-code-camp"></i> <span>Kelas</span></a></li>
				<li><a href="<?= base_url('dasboard/administrator') ?>"><i class="fa fa-user"></i> <span>Admintrator</span></a></li>
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
			<!-- Small boxes (Stat box) -->
			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('massage'); ?>"></div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<!-- SELECT2 EXAMPLE -->
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title">Insert Data Mata Kuliah</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<!-- action di isi route untuk update jurusan -->
							<form action="<?= base_url('dasboard/mk_tambah') ?>" method="post">
								<div class="row">
									<div class="col-md-6">

										<div class="form-group">
											<label for="matakuliah">Nama Mata Kuliah</label>
											<input type="text" class="form-control" name="matakuliah" id="matakuliah" placeholder="Masukkan Nama Mata Kuliah ...">
										</div>
										<!-- /.form-group -->

										<div class="form-group">
											<label for="namajurusan">Nama Jurusan</label>
											<select name="namajurusan" id="namajurusan" class="form-control">
												<?php foreach ($jurusan as $j) : ?>
													<option value="<?= $j['nama_jurusan'] ?>"><?= $j['nama_jurusan'] ?> </option>
												<?php endforeach; ?>
											</select>
										</div>
										<!-- /.form-group -->
									</div>

									<!-- col sebelah nya -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="sks">Jumlah SKS</label>
											<select name="sks" id="sks" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
										<!-- /.form-group -->

										<div class="form-group">
											<label for="semester">Jenjang Semester</label>
											<select name="semester" id="semester" class="form-control">
												<option value="1">Semester 1</option>
												<option value="2">Semester 2</option>
												<option value="3">Semester 3</option>
												<option value="4">Semester 4</option>
												<option value="5">Semester 5</option>
												<option value="6">Semester 6</option>
												<option value="7">Semester 7</option>
												<option value="8">Semester 8</option>
											</select>
										</div>
										<!-- /.form-group -->
									</div>
								</div>


								<div class="form-group">
									<input type="hidden" name="date" value="<?= date('Y-m-d'); ?>">
									<label>Deskripsi Mata Kuliah</label>
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

			<div class="row">
				<div class="col-xs-12">
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
										<th>Nama Matakuliah</th>
										<th>Sks</th>
										<th>Semester</th>
										<th>Jurusan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($matakuliah as $m) : ?>
										<tr>
											<td><?= $no; ?> </td>
											<td><?= $m['nama_mk'] ?> </td>
											<td><?= $m['sks_mk'] ?></td>
											<td><?= $m['semester_mk'] ?></td>
											<td><?= $m['jurusan_mk'] ?></td>
											<td>

												<button type="button" data-toggle="modal" data-target="#modal-default<?= $m['id_mk'] ?>" class="btn btn-primary">
													<i class="fa fa-eye "></i>
												</button>
												<a href="<?= base_url('dasboard/mk_delete') ?>/<?= $m['id_mk'] ?>" class="btn btn-danger tombol-hapus">
													<i class="fa fa-trash"></i>
												</a>
											</td>
										</tr>


										<div class="modal fade" id="modal-default<?= $m['id_mk'] ?>">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title text-center">
															Mata Kuliah
														</h4>
													</div>
													<div class="modal-body">
														<div class="box-body">
															<div class="form-group">
																<label for="namamk">Nama Matakuliah</label>
																<input class="form-control" type="text" value="<?= $m['nama_mk'] ?>" id="namamk" readonly>
															</div>
															<div class="form-group">
																<label for="sksmk">Jumlah Sks</label>
																<input class="form-control" type="text" value="<?= $m['sks_mk'] ?>" id="sksmk" readonly>
															</div>
															<div class="form-group">
																<label for="semester">Jenjang Semester</label>
																<input class="form-control" type="text" value="<?= $m['semester_mk'] ?>" id="semester" readonly>
															</div>
															<div class="form-group">
																<label for="jurusan">Jurusan</label>
																<input class="form-control" type="text" value="<?= $m['jurusan_mk'] ?>" id="jurusan" readonly>
															</div>
															<div class="form-group">
																<label for="deskripsi">Deskripsi Matakuliah</label>
																<textarea class="form-control" id="deskripsi" cols="30" rows="10" readonly><?= strip_tags($m['deskripsi_mk']) ?></textarea>
															</div>
														</div>
														<!-- /.box-body -->
													</div>
													<div class="modal-footer">
														<?= date('d-m-Y') ?>
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
										<th>Nama Matakuliah</th>
										<th>Sks</th>
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
