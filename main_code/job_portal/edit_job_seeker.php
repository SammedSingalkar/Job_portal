<?php
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$query = "update job_seeker set name='$_POST[Job_Seeker_name]',Email='$_POST[Email]',Gender=$_POST[Gender],mobile='$_POST[Contact_Details]',Date of birth='$_POST[Date_of_birth]',password='$_POST[password]' where Job_seeker_ID = $_POST[Job_seeker_ID]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "user_dashboard.php";
</script>