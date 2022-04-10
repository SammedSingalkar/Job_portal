<?php
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$query = "insert into job_seeker values(null,'$_POST[name]','$_POST[email]','$_POST[gender]','$_POST[mobile]','$_POST[birthday]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "login.php";
</script>