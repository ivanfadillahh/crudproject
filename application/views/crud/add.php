<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Input Data Database</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h1>Input Data</h1>
		<p><i>Isi dan lengkapi dengan data yang valid</i></p>
		<form  action="<?php echo base_url();?>crud/action_add" method="post">
		<table border="0">
					<tr>
						<td>
							<i><font size="2"><b>Nama lengkap </b></font></i><input type="text" name="nama" placeholder="Masukkan nama...">
						</td>
						<td>
							<i><font size="2"><b>Status </b></font></i><input type="text" name="status" placeholder="Masukkan status...">
						</td>
					</tr>
					<tr>
						<td>
							<i><font size="2"><b>Jurusan/ prodi </b></font></i><input type="text" name="jurusan" placeholder="Masukkan jurusan...">
						</td>
						<td>
							<i><font size="2"><b>Keterangan </b></font></i><input type="text" name="informasi" placeholder="Masukkan keterangan...">
						</td>
					</tr>
					<tr>
						<td>
							<i><font size="2"><b>Alamat lengkap </b></font></i><input type="text" name="alamat" placeholder="Masukkan alamat...">
						</td>
						<td>
							<?php echo form_open('crud/action_add'); ?>
							<?php echo "<input type='file' name='userfile' size='20' />"; ?>
							<?php echo "</form>" ?>
						</td>
					</tr>
				</table>
				<br>
				<input type="submit" name="submit" value="Tambah">
				<input type="button" value="Batal" onclick="window.location.href='<?php echo base_url() ?>crud/index'">
		</form>	
	</center>
	
</body>
</html>