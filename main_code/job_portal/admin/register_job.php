<?php
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$query = "insert into job values('$_POST[no_of_vacancies]','$_POST[company_name]','$_POST[id]','$_POST[salary]','$_POST[skills_required]','$_POST[location]','$_POST[type]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully.....You can see now")
	window.location.href = "../index.php";
</script>

