<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
	<h3>Online Job portal</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="user_login" value="User Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin/admin_login.php");
		}
		if(isset($_POST['user_login'])){
			header("Location: user/user_login.php");
		}
	?>
	</center>
</body>
</html>