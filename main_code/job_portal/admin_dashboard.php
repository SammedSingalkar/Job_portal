<?php
session_start();
$connection = mysqli_connect("localhost", "root", "Iamsammed@12");
$db = mysqli_select_db($connection, "online_job_portal");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#side_bar {
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}
		.navbar-brand{
			  font-size: large;
		  }
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Home</a>
        <a class="navbar-brand" href="add_company.php">Add Company</a>
        <a class="navbar-brand" href="add_job.php">Add Job</a>

			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['user_name']; ?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['Email']; ?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<a class="nav-link" href="admin_dashboard.php">Dashboard</a>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="admin_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_admin_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_admin_password.php">Change Password</a>
					</div>
          
				</li>
				<li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>