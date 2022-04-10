<?php
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$query = "insert into company values('$_POST[company_name]','$_POST[company_id]','$_POST[pincode]','$_POST[date]','$_POST[website_url]','$_POST[stream]','$_POST[location]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully.....You can see now")
	window.location.href = "../index.php";
</script>

