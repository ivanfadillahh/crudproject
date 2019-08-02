<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="user"> <br>
		<input type="password" name="pass"> <br>
		<input type="submit" value="Login">
	</form>
</body>
</html>-->

<?php

	echo form_open('auth/login');

?>
<input type="text" name="username">
<input type="password" name="password">
<button type="submit" name="submit">Login</button>
</form>