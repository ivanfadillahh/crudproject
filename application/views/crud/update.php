<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Data Database</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h1>Edit Data</h1>
		<p><i>Isi dan lengkapi dengan data yang valid</i></p>
		<?php foreach ($content->result() as $key): ?>
			<form  action="<?php echo base_url();?>crud/action_update/<?php echo $key->id ?>" method="post">
				<table border="0">
					<tr>
						<td><i><font size="2"><b>Nama lengkap </b></font></i><input type="text" name="nama" placeholder="Masukkan nama..." value="<?php echo $key->nama ?>">
						</td>
						<td>
							<i><font size="2"><b>Status </b></font></i><input type="text" name="status" placeholder="Masukkan status..." value="<?php echo $key->status ?>">
						</td>
					</tr>
					<tr>
						<td><i><font size="2"><b>Jurusan/ prodi </b></font></i><input type="text" name="jurusan" placeholder="Masukkan jurusan..." value="<?php echo $key->jurusan ?>">
						</td>
						<td>
							<i><font size="2"><b>Keterangan </b></font></i><input type="text" name="informasi" placeholder="Masukkan keterangan..." value="<?php echo $key->informasi ?>">
						</td>
					</tr>
					<tr>
						<td>
							<i><font size="2"><b>Alamat lengkap </b></font></i><input type="text" name="alamat" placeholder="Masukkan alamat...">
						</td>
						<td>
							<?php echo form_open('crud/do_upload'); ?>
							<?php echo "<input type='file' name='userfile' size='20' />"; ?>
							<?php echo "</form>" ?>
						</td>
					</tr>
				</table>
					<br>
					<input type="submit" value="Simpan">
					<input type="button" value="Batal" onclick="window.location.href='<?php echo base_url() ?>crud/index'">
			</form>
		<?php endforeach ?>
	</center>
</body>
</html>