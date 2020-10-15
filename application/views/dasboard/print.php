<!DOCTYPE html>
<html lang="en"><head>
<title><?= $judul ?></title>
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
					<td>Golongan</td>
					<td>:</td>
					<td><?= $laporan['matakuliah'] ?></td>
				</tr>
				<tr>
					<td>Gaji </td>
					<td> : </td>
					<td>Rp. <?= $laporan['jurusan'] ?> </td>
				</tr>
				<tr>
					<td>Digital Signature </td>
					<td> : </td>
					<td><?= $laporan['absen'] ?></td>
				</tr>
			</table>
			<h6>Silahkan lakukan proses Verifikasi segera!! <br>
				Terima kasih</h6>
			<h6>
				<?= date('d-m-Y H:i:s') ?>
			</h6>
		</div>
	</fieldset>
</body></html>
