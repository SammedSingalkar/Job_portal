<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Companies</title>
	<style>
		.block {
			background-color: antiquewhite;
			margin-top: 9vh;
			margin-left: 8vh;
			padding: 5vh;
			height: 29vh;
			width: 22vw;
			border: 3px solid black;
			border-radius: 5px;
			display: inline-block;

		}

		.block .name {
			text-align: center;
			color: black;
			font-size: 5vh;
		}

		.block h4 {
			margin-bottom: 0;
			margin-top: 1vh;
			font-size: smaller;
			opacity: .5
		}

		a:hover {
			color: royalblue;
		}
	
	</style>
	<?php
	session_start();
	$connection = mysqli_connect("localhost", "root", "Iamsammed@12");
	$db = mysqli_select_db($connection, "online_job_portal");
	?>
</head>

<body style="background-color:whitesmoke">

	<?php
	$query = "select distinct * from company";
	$query_run = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_assoc($query_run)) {
	?>
		<div class="block" >
			<div class="name">
				<?php echo $row['Company_name'] ?>
			</div>

			<div class="stream">
				<h4>Company Stream</h4>
				<?php echo $row['Company_stream'] 
				?>
			</div>
			

			<div class="date">
				<h4>Establishment Date</h4>
				<?php echo $row['Establishment_date'] ?>
		
			</div>
			

			<div class="Website">
				<h4>Website URL</h4>
				<a href="<?php echo $row['Website_url'] ?>" target="_blank"><?php echo $row['Website_url'] ?></a>
			</div>

			<div class="location">
				<h4>Headquatered</h4>
				<?php echo $row['Location'] ?>
			</div>

			
			<!-- <div class="logo" style="margin-left: 15vh; display: relative"><?php echo '<img src="data:image;base64,'.base64_encode($row['logo']).'" alt="Image" style = "width: 120px; height: 100px;">'; ?>
				</div> -->

		</div>
	<?php
	}
	?>
</body>

</html>