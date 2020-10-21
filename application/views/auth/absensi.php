<div class="login-box">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('massage'); ?>"></div>

	<div class="login-logo">
		<a>
			Absensi Dosen <br>
			<b>Fakultas Teknik</b>
		</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Isi form untuk melakukan absensi</p>

		<form action="<?= base_url('Absensi/absen') ?>" method="post">
			<div class="form-group has-feedback">
				<input type="hidden" name="absen" value="<?= $dosen['absen'] ?>">
				<label for="namedosen"></label>
				<input type="text" class="form-control" name="namedosen" id="namedosen" placeholder="<?= $dosen['dosen'] ?>" value="<?= $dosen['dosen'] ?>" readonly>
				<!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
			</div>
			<div class="form-group has-feedback">
				<label for="matakuliah"></label>
				<select name="matakuliah" id="matakuliah" class="form-control">
					<?php foreach ($matakuliah as $mk) : ?>
						<option value="<?= $mk['matakuliah'] ?>"><?= $mk['matakuliah'] ?> </option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="row">

				<!-- /.col -->
				<div class="col-xs-6">
					<a class="btn btn-default btn-block btn-flat" href="<?= base_url('auth/logoutdosen') ?>" class="text-center">Logout</a>
				</div>
				<div class="col-xs-6">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Absen</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		<br>



	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->
