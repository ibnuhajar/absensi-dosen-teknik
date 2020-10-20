<!DOCTYPE html>
<html lang="en">
<head><title><?= $judul ?></title>
</head><body>
	<fieldset>
		<legend>
			<center>
				<h3>
					Detail Pegawai
				</h3>
			</center>
		</legend>
		<div class="container">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?= $laporan['dosen'] ?></td>
				</tr>
				<tr>
					<td>Mata Kuliah</td>
					<td>:</td>
					<td><?= $laporan['matakuliah'] ?></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td> : </td>
					<td><?= $laporan['jurusan'] ?> </td>
				</tr>
				<tr>
					<td>Absensi</td>
					<td> : </td>
					<td><?= $laporan['absen'] ?></td>
				</tr>
			</table>
			<h6>
				<?= date('d-m-Y H:i:s') ?>
			</h6>
		</div>
	</fieldset>
</body></html>
