<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Jobs</title>
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
				<a class="navbar-brand" href="../index.php">Home</a>
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
                        <a class="dropdown-item" href="delete_admin_account.php">Delete Account</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>

<div class="col-md-8" id="main_content">
        <center>
            <h3>Add Job</h3>
        </center>
        <form action="register_job.php" method="post">
        <div class="form-group">
                <label for="name">Job ID</label>
                <input type="number" name="id" class="form-control" placeholder="for ex: 4455" required>
            </div>

            <div class="form-group">
                <label for="name">No of vacancies</label>
                <input type="number" name="no_of_vacancies" class="form-control" placeholder="Vacancies" required>
            </div>

            <div class="form-group">
                <label for="name">Company name</label>
                <input type="text" name="company_name" class="form-control" placeholder="company" required>
            </div>

            <div class="form-group">
                <label for="name">Salary</label>
                <input type="text" name="salary" class="form-control"  placeholder="Salary" >
            </div>

            
            <div class="form-group">
                <label for="name">Skills Required</label>
                <input type="text" name="skills_required" class="form-control"  placeholder="for ex: python.sql" required >
            </div>
            
            <div class="form-group">
                <label for="name">Location</label>
                <input type="text"  name="location" class="form-control" placeholder="for ex: Mumbai" required>
            </div>

            <div class="form-group">
                <label for="name">Job type</label>
                <input type="text" name="type" class="form-control"  placeholder="for ex: web-design" >
            </div>
           
            <center>
            <button type="submit" class="btn btn-primary">ADD</button>
            </center>
        </form>