<?php
	session_start();
		$connection = mysqli_connect("localhost","root","Iamsammed@12");
		$db = mysqli_select_db($connection,"online_job_portal");
        $user_ID = "";
        $name = "";
	    $email = "";
        $gender = "";
	$mobile = "";
	$birth_date = "";
	$query = "select * from job_seeker  where Email = '$_SESSION[Email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
        $user_ID =  $row['Job_seeker_ID'];
		$name = $row['Job_Seeker_name'];
		$email = $row['Email'];
        $gender = $row['Gender'];
		$mobile = $row['Contact_Details'];
		$birth_date = $row['Date_of_birth'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
		  
		  .row{
			  margin-top: 2vh;
			  /* color: white; */
		  }
		  /* body{
			background-color:grey;
		  } */
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Home</a>
				<a class="navbar-brand" href="job.php">Jobs</a>

			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['Job_Seeker_name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['Email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
			<a class = "nav-link" href = "userdashboard.php">Dashboard</a>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>

    <div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<div class="form-group">
					<label>User ID:</label>
					<input type="text" class="form-control" value="<?php echo $user_ID;?>" disabled>
				</div>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				</div>
				<div class="form-group">
					<label>Email ID:</label>
					<input type="text" class="form-control" value="<?php echo  $email;?>" disabled>
				</div>
                <div class="form-group">
					<label>Gender:</label>
					<input type="text" class="form-control" value="<?php echo  $gender;?>" disabled>
				</div>
                <div class="form-group">
					<label>Mobile No:</label>
					<input type="text" class="form-control" value="<?php echo  $mobile;?>" disabled>
				</div>
                <div class="form-group">
					<label>Date of Birth:</label>
					<input type="date" class="form-control" value="<?php echo  $birth_date;?>" disabled>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>