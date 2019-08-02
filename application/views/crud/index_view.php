<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h2>SISTEM CRUD DATABASE VIEW</h2>
		<input type="button" value="Create Data" onclick="window.location.href='<?php echo base_url() ?>crud/add/'">
		<!--<a href="<?php echo base_url(); ?>crud/add">Create Data</a>-->
		<input type="button" value="Back Home" onclick="window.location.href='<?php echo base_url() ?>crud/index/'">
		<br><br>
		<table border="0" bgcolor="lightgreen">
			<tr align="center">
				<td bgcolor="lightblue">ID</td>
				<td bgcolor="lightblue">Nama</td>
				<td bgcolor="lightblue">Status</td>
				<td bgcolor="lightblue">Jurusan</td>
				<td bgcolor="lightblue">Informasi</td>
				<td bgcolor="lightblue">Alamat</td>
				<td bgcolor="lightblue">Action</td>
			</tr>
			<?php foreach ($content->result() as $key): ?>
				<tr align="center">
					<td bgcolor="lightblue"><?php echo $key->id ?></td>
					<td><?php echo $key->nama ?></td>
					<td><?php echo $key->status?></td>
					<td><?php echo $key->jurusan?></td>
					<td><?php echo $key->informasi?></td>
					<td><?php echo $key->alamat ?></td>
					<?php 
						echo "<td><img src='./uploads/".$key->lokasi_img."' width='100' height='100'></td>";
					 ?>
					<td>
						<!--<input type="button" value="Read" onclick="window.location.href='<?php echo base_url() ?>crud/read/<?php echo $key->id ?>'"> | -->

						<!--<a href="<?php echo base_url() ?>crud/read/<?php echo $key->id ?>">Read</a>-->

						<input type="button" value="Delete" onclick="window.location.href='<?php echo base_url() ?>crud/delete/<?php echo $key->id ?>'"> |

						<!--<a href="<?php echo base_url() ?>crud/delete/<?php echo $key->id ?>">Delete</a> |-->

						<input type="button" value="Update" onclick="window.location.href='<?php echo base_url() ?>crud/update/<?php echo $key->id ?>'">

						<!--<a href="<?php echo base_url() ?>crud/update/<?php echo $key->id ?>">Edit</a> |-->
					
					</td>
				</tr>
			<?php endforeach ?>
		</table>
		
	</center>
</body>
</html>