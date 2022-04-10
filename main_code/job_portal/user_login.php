<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
  <style type="text/css">
    body {
      /* background-image: url("https://www.wallpapers13.com/wp-content/uploads/2018/11/Dolomiti-Italy-Autumn-Lago-Antorno-landscape-photography-Desktop-HD-Wallpaper-For-PC-Tablet-And-Mobile-3840x2400-1920x1080.jpg"); */
      background-image: url("Login-background-image.jpg");
    }
  </style>
</head>

<body>
  <section class="text-blueGray-700">
    <br><br>
    <div class="container items-center px-5 py-12 lg:px-20">
      <div class="flex flex-col w-full max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg md:mt-0">
        <div class="mt-8">
          <div class="mt-6" style="margin-top:0vh">
            <form action="#" method="POST" class="space-y-6">
              <center>
                <h2>Login Here</h2>
              </center>

              <div>
                <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                <div class="mt-1">
                  <input id="email" name="Email" type="email" autocomplete="email" required="" placeholder="Your Email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform
                    border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                </div>
              </div>
              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-neutral-600"> Password </label>
                <div class="mt-1">
                  <input id="password" name="password" type="password" autocomplete="current-password" required="" placeholder="Your Password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition
                    duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                </div>
              </div>
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <input id="remember-me" name="remember-me" type="checkbox" placeholder="Your password" class="w-4 h-4 text-blue-600 border-gray-200 rounded focus:ring-blue-500">
                  <label for="remember-me" class="block ml-2 text-sm text-neutral-600"> Remember me </label>
                </div>
                <div class="text-sm">
                  <a href="" class="font-medium text-blue-600 hover:text-blue-500"> Forgot your password? </a>
                </div>
              </div>
              <div>
                <button type="submit" name="login" class="flex items-center justify-center w-full px-1 py-4 text-base font-medium text-center text-white transition
                  duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Sign in </button>
              </div>
            </form>
            <?php
            session_start();
            if (isset($_POST['login'])) {
              $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
              $db = mysqli_select_db($connection, "online_job_portal");
              $query = "select * from job_seeker where Email = '$_POST[Email]'";
              $query_run = mysqli_query($connection, $query);
              while ($row = mysqli_fetch_assoc($query_run)) {
                if ($row['Email'] == $_POST['Email']) {
                  if ($row['password'] == $_POST['password']) {
                    $_SESSION['Job_Seeker_name'] =  $row['Job_Seeker_name'];
                    $_SESSION['Email'] =  $row['Email'];
                    header("Location: userdashboard.php");
                    // echo "Login Succesfull";
                    
                  
                  } else {
                  ?>
                    <span>Wrong Password !!</span>
            <?php
                  }
                }
              }
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>