<div class="login-box">
	<div class="login-logo">
		<a href="<?= base_url() ?>"><b>Fakultas Teknik</b></a><br>
		<a>ADMIN</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in untuk masuk ke Dasboard</p>

		<form action="<?= base_url('auth/loginadmin') ?>" method="post">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="username" placeholder="username">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">

				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		<br>

		<a href="<?= base_url('auth') ?>" class="text-center">Login absensi dosen</a>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->
