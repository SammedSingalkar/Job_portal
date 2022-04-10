<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Companies</title>
	<style>
	
     .block{
		 background-color:antiquewhite;
		 margin-top: 8vh;
		 margin-left: 8vh;
		 padding: 4vh;
		 height: 34vh;
		 width: 22vw;
		 display: block;
		 border: .5vh solid black;
		 border-radius: 5px;
		 display:inline-block;	 
	 }

	  .block .type{
		 text-align:center;
		 color: black;
		 font-size: 5vh;
	 }
	 
	 .block h4{
		 margin: 0;
		 margin-top: 1vh;
		 font-size: smaller;
		 opacity:.5
	 }

	    .block .skills button{
		 height: 4vh;
		 width:4vw;
		 margin-left: 41vh;
		 background-color: blue;
		 color: white;
		 display: inline-block;
		 cursor: pointer;
		 border-radius: 4px;

	 }
	</style>
	<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
    $db = mysqli_select_db($connection, "online_job_portal");
    ?>
</head>
<body style = "background-color:whitesmoke">

<?php
				$query = "select * from job where Job_Location_city = 'Bengaluru'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
	<div class="block">
		<div class="type">
		<?php echo $row['job_type']?>
		</div>
		
		<div class="name" name="company">
		<h4> Company Name</h4>
			<?php echo $row['Company_name']?>
		</div>	
		
		<div class="Vacancies">
		<h4>No of Vacancies</h4>
		<?php echo $row['No_Of_Vacancies']?>
		</div>

		<div class="salary">
		<h4>Salary</h4>
		<?php echo $row['salary']?></a>
		</div>

		<div class="location">
		<h4>Job Location</h4>
		<?php echo $row['Job_Location_city']?>
		</div>

        <div class="skills">
		<h4>Skills</h4>
		<span><?php echo $row['Skills_required']?></span>

		<button onclick="location.href='registration.php'">Apply</button>
		</div>
		
	</div>
	<?php
				}
		 ?>
		
</body>
</html>