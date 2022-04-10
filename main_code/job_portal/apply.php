<?php
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$query = "insert into registration values(null,'$_POST[name]','$_POST[company_name]','$_POST[date]','$_POST[post]')";
	$query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Registration successfully.....")
	window.location.href = "index.php";
</script>