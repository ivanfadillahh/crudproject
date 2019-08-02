<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard Data CRUD Database</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h2>SISTEM CRUD DATABASE</h2>

		<?php 
			echo form_open('crud/cari');
		 ?>
		 <input type="text" name="keyword" placeholder="Masukkan kata pencarian...">
		 <input type="submit" name="search_submit" value="Cari"> |
		 <?php 
		 	form_close();
		  ?>
		
		<input type="button" value="Create Data" onclick="window.location.href='<?php echo base_url() ?>crud/add/'"> |
		<input type="button" value="Back Home" onclick="window.location.href='<?php echo base_url() ?>crud/index/'">
		<br><br>
		<table border="0" bgcolor="lightgreen">
			<tr align="center">
				<td bgcolor="lightblue">ID</td>
				<td bgcolor="lightblue">Nama</td>
				<td bgcolor="lightblue">Status</td>
				<td bgcolor="lightblue">Jurusan</td>
				<td bgcolor="lightblue">Informasi</td>
				<td bgcolor="lightblue">Photo</td>
				<td bgcolor="lightblue">Action</td>
			</tr>

			<?php 
				if(!$content){ 
			?>
					<h2><b>Data tidak ditemukan!</b></h2>
			<?php 
				}
			?>

			<?php 
				foreach ($content as $key): 
			?>
				<tr align="center">
					<td bgcolor="lightblue"><?php echo $key->id ?></td>
					<td><?php echo $key->nama ?></td>
					<td><?php echo $key->status?></td>
					<td><?php echo $key->jurusan?></td>
					<td><?php echo $key->informasi?></td>
					<?php 
						echo "<td><img src='./uploads/".$key->lokasi_img."' width='100' height='100'></td>";
					 ?>
					<td>
						<input type="button" value="Read" onclick="window.location.href='<?php echo base_url() ?>crud/read/<?php echo $key->id ?>'"> |

						<input type="button" value="Delete" onclick="window.location.href='<?php echo base_url() ?>crud/delete/<?php echo $key->id ?>'"> |

						<input type="button" value="Update" onclick="window.location.href='<?php echo base_url() ?>crud/update/<?php echo $key->id ?>'">
					</td>
				</tr>
			<?php 
				endforeach 
			?>
			
		</table>

	</center>
</body>
</html>