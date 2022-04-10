<?php
	session_start();
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$password = "";
	$query = "select * from administrator where Email = '$_SESSION[Email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update administrator set password = '$_POST[new_password]' where Email = '$_SESSION[Email]'";
		$query_run = mysqli_query($connection,$query);
	}
	?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admin_dashboard.php";
</script>
