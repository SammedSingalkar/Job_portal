<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        #header {
            /* height: 10%; */
            width: 100%;
            /* top: 2%; */
            background-color: white;
            position: fixed;
            color: black;
        }
        /* a{
            font-size:large;
            font-weight: 500;
        } */
        header{
        background-color: White;  
      }
      nav{
        color: red;
        /* font-weight: bold; */
      }
      /* footer{
        background-color: aqua; 
      } */
      
      #left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: black;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
    </style>

    <?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
    $db = mysqli_select_db($connection, "online_job_portal");
    ?>
</head>

<body>
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Job Portal</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
          <a href="index.php"class="mr-5 hover:text-gray-900">Home</a>
          <a href="Jobs.html"class="mr-5 hover:text-gray-900">Jobs</a>
          <a href="Companies.php"class="mr-5 hover:text-gray-900">Companies</a>
          <a href="Contact details.html"class="mr-5 hover:text-gray-900">Contact details</a>
          <a href="about us.html"class="mr-5 hover:text-gray-900">about us</a>
      </nav>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button onclick="location.href='logout.php'"class="inline-flex items-center none border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logout
      </button>
    </header>
    </div>
    <div id="header"><br>
        <center>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['Email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['Job_Seeker_name']; ?>
            <!-- <a  href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout </a> -->
        </center>
    </div>

    <!-- dashboard code -->
    <!-- <span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span> -->
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="edit_detail" value="Edit Detail">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from job_seeker where Email = '$_SESSION[Email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
					<tr>
						<td>
							<b>Job seeker ID:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Job_seeker_ID']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Job_Seeker_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email ID:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Gender:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Gender']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Contact Details:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Contact_Details']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Date of birth:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Date_of_birth']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
				</table>
				<?php
				}	
			}
            ?>
            <?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from job_seeker where Email = '$_SESSION[Email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			      ?>
				<form action="edit_job_seeker.php" method="post"> 
			 			<table>
			 			<tr>
			 				<td>
			 					<b>Job seeker ID:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="Job seeker ID" value="<?php echo $row['Job_seeker_ID']?>">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<b>Name:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="name" value="<?php echo $row['Job_Seeker_name']?>">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<b>Email ID:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="Email" value="<?php echo $row['Email']?>">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<b>Gender:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="Gender" value="<?php echo $row['Gender']?>">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<b>Mobile:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="mobile" value="<?php echo $row['Contact_Details']?>">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<b>Date of birth:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="Date of birth" value="<?php echo $row['Date_of_birth']?>">
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<b>Password:</b>
			 				</td> 
			 				<td>
			 					<input type="text" name="password" value="<?php echo $row['password'] ?>">
			 				</td>
			 			</tr>
			 			<br>
			 			<tr>
			 				<td></td>
			 				<td>
			 					<input type="submit" value="Save">
			 				</td>
			 			</tr>
			 		</table>
			 		</form>
			 		<?php
                }
            }
    			 ?>
		</div>
	</div>
</body>

</html>
