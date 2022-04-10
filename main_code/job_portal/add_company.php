<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Profile</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
			  /* background-image: linear-gradient(red, yellow); */
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
		  .navbar-brand{
			  font-size: large;
		  }
          #main_content {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            /* color:white; */
            background-color: transparent; 
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
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['user_name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['Email'];?></strong></span></font>
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

<div class="col-md-8" id="main_content">
        <center>
            <h3>Add Company</h3>
        </center>
        <form action="register_company.php" method="post">
        <div class="form-group">
                <label for="name">Company ID</label>
                <input type="text" name="company_id" class="form-control" placeholder="ID" required>
            </div>
            <div class="form-group">
                <label for="name">Company name</label>
                <input type="text" name="company_name" class="form-control" placeholder="company" required>
            </div>

            <div class="form-group">
                <label for="name">Pincode</label>
                <input type="text" name="pincode" class="form-control"  placeholder="Pin" >
            </div>

            <div class="form-group">
                <label for="name">Establishment_date</label>
                <input type="date" value="0000-00-00" name="date" class="form-control" placeholder="date" required>
            </div>

            <div class="form-group">
                <label for="name">Website URL</label>
                <input type="text" name="website_url" class="form-control"  placeholder="for ex: www.google.com" >
            </div>

            <div class="form-group">
                <label for="name">Stream</label>
                <input type="text" name="stream" class="form-control"  placeholder="for ex: IT" >
            </div>

            <div class="form-group">
                <label for="name">Location</label>
                <input type="text" name="location" class="form-control"  placeholder="for ex: Mumbai" >
            </div>

            <!-- <div class="form-group">
                <label for="name">LoGo</label>
                <input type="file" name="logo" class="form-control" >
            </div> -->
            <center>
            <button type="submit" class="btn btn-primary">ADD</button>
            </center>
        </form>