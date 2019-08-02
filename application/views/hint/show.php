<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show Hint on Screen</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
    <input type="submit" value="Send" />
	</form>

	<?php
		if(isset($_POST['submit'])){
			echo 'Inputan : ', htmlspecialchars($_POST['something']);
		}
	?>
	
</body>
</html>