<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="sample.css">
  <title>Document</title>
  <style>
    /* CSS for search bar */
    body {
      font-family: Arial;
    }
/* 
    * {
      box-sizing: border-box;
    } */

    form.example input[type=text] {
      padding: 7px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 85%;
      background: #f1f1f1;
    }

    form.example button {
      float: left;
      width: 15%;
      padding: 7px;
      background: #2196F3;
      color: white;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
    }

    form.example button:hover {
      background: #0b7dda;
    }

    form.example::after {
      content: "";
      clear: both;
      display: table;
    }


    nav {
      color: red;
      /* font-weight: bold; */
    }

    /* section {
      background-color: white;
    } */

    /* body{
      background-color: rgb(41, 39, 39);
      color:white;
    } */

    header button{
      background-color: #0b7dda;
      color:black;
    }
  </style>
</head>

<body>
  <!-- Code for navigation bar (header) -->
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Job Portal</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
        <a href="Job.php" class="mr-5 hover:text-gray-900">Jobs</a>
        <a href="Companies.php" class="mr-5 hover:text-gray-900">Companies</a>
        <a href="Contact details.html" class="mr-5 hover:text-gray-900">Contact details</a>
        <a href="about us.html" class="mr-5 hover:text-gray-900">about us</a>
      </nav>
      <!--Seach bar  -->
      <form class="example" action="search.html" style="margin:auto;max-width:320px">
        <input type="text" placeholder="Search here" name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <!-- Login button -->
      <button  onclick="location.href='login.php'" class="inline-flex items-center none border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login</a>
      </button> 
      
      &nbsp;
      <!-- Sign up button -->
      <div class="signup">
      <button onclick="location.href='signup.php'" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Sign up
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
      </div>
    </div>
  </header>


  <!-- left Slideshare -->
  <div class="flex h-screen overflow-hidden bg-white rounded-lg">
    <div class="hidden md:flex md:flex-shrink-0">
      <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-indigo-700 border-r">
          <div class="flex flex-col items-center flex-shrink-0 px-4">
            <a href="/" class="px-8 text-left focus:outline-none">
              <h2 class="block p-2 text-xl font-medium tracking-tighter text-white transition duration-500 ease-in-out transform cursor-pointer hover:text-white"> Job Portal </h2>
            </a>

            <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="flex flex-col flex-grow px-4 mt-5">
            <nav class="flex-1 space-y-1 bg-indigo-700">
              <ul>
                <li>
                  <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform bg-indigo-600 rounded-lg focus:shadow-outline " white="" 70="" href="userdashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <span class="ml-4">User Dashboard</span>
                  </a>
                </li>
                <li>

                  <a class=" inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800
                  rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span class="ml-4">User</span>
                  </a>
                </li>

                <li>
                  <a class=" inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" href="Settings.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="ml-4">Settings</span>
                  </a>
                </li>
              </ul>
              <p class="px-4 pt-4 font-medium text-white uppercase">Shortcuts</p>
              <ul>
                <li>
                  <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600 " white="" 70="" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span class="ml-4"> Achievement</span>
                  </a>
                </li>

                <li>
                  <a class=" inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform border-indigo-800 rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600" white="" 70="" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="ml-4"> Reports</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="flex flex-shrink-0 p-4 px-4 bg-indigo-600">
            <a href="#" class="flex-shrink-0 block w-full group">
              <div class="flex items-center">
                <div>
                  <img class="inline-block rounded-full h-9 w-9" src="https://d33wubrfki0l68.cloudfront.net/c5b13c40dad2f6fe28f2f7f016c9d027f2a39306/afe15/images/wickedlabslogo.jpg" alt="">
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-white">Job Portals</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="flex flex-col flex-1 w-0 overflow-hidden">
      <main class="relative flex-1 overflow-y-auto focus:outline-none">
        <div class="py-6">
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <!-- <h1 class="text-lg text-neutral-600"> Here is where you put your stuff </h1> -->
          </div>
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <!-- Put your content here -->
            <!-- Gallery (hero) -->
            <section class="text-gray-600 body-font">
              <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">“All our dreams can come true, if we have the courage to pursue them.”
                    <br class="hidden lg:inline-block">—Walt Disney
                  </h1>
                  <p class="mb-8 leading-relaxed"> <mark>“When one door closes, another opens; but we often look so long and so regretfully upon the closed door that we do not see the one which has opened for us.” —Alexander Graham Bell </mark></p>
                  <div class="flex justify-center">
                    <button onclick="location.href='login.php'"  class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login</button>
                    <button onclick="location.href='signup.php'" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Signup</button>
                  </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                  <img class="object-cover object-center rounded" alt="hero" src="https://quotefancy.com/media/wallpaper/3840x2160/1862536-Liam-Payne-Quote-Live-your-dream-and-never-wake-up.jpg">
                </div>
              </div>
            </section>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Statistics  -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Live Data Of Our Job Portal</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Our aim is to provide the Jobs to the each and every person in India and to accomplish this we need your support.</p>
      </div>
      <div class="flex flex-wrap -m-4 text-center">
        <div style="color:white" class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div style = "background-image: linear-gradient(90deg,#ff9800 47.4%,rgba(255,152,0,.6528) 99.99%,rgba(255,152,0,0));" class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <div style="color:white" class="title-font font-medium text-3xl text-gray-900">
              <?php

              $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
              $db = mysqli_select_db($connection, "online_job_portal");


              $query = "select * from job";
              $query_run = mysqli_query($connection, $query);
              $row  = mysqli_num_rows($query_run);
              echo '<h1>' . $row . '</h1>';
              ?>


            </div>
            <p class="leading-relaxed">Jobs</p>
          </div>
        </div>

        <div style="color:white" class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div style = "background-image: linear-gradient(90deg,#bc2bc4 0,#cb42d3 47.4%,#ea72f0 99.99%,#eda7f1);" class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
            </svg>
            <div style="color:white" class="title-font font-medium text-3xl text-gray-900">
              <?php

              $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
              $db = mysqli_select_db($connection, "online_job_portal");


              $query = "select * from job_seeker";
              $query_run = mysqli_query($connection, $query);
              $row  = mysqli_num_rows($query_run);
              echo '<h1>' . $row . '</h1>';
              ?>
            </div>
            <p class="leading-relaxed">Job Seekers</p>
          </div>
        </div>
        <div style="color:white" class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div style = "background-image: linear-gradient(90deg,#00b3ff 0,#7ed8fe 80.4%,#90d9f9 99.99%,#8cd8f9);" class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24"> -->
              <!-- <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path> -->
            </svg>


            <div style="color:white" class="title-font font-medium text-3xl text-gray-900">
              <?php

              $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
              $db = mysqli_select_db($connection, "online_job_portal");


              $query = "select distinct Company_name from company";
              $query_run = mysqli_query($connection, $query);
              $row  = mysqli_num_rows($query_run);
              echo '<h1>' . $row . '</h1>';
              ?>
            </div>
            <p class="leading-relaxed">Companies</p>
          </div>
        </div>
        <div style="color:white" class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div style = "background-image: linear-gradient(90deg,#ff6268 0,#f9979b 75.4%,#e9b5b7 99.99%,hsla(0,0%,100%,0));" class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <div style="color:white" class="title-font font-medium text-3xl text-gray-900">
              <?php

              $connection = mysqli_connect("localhost", "root", "Iamsammed@12");
              $db = mysqli_select_db($connection, "online_job_portal");


              $query = "select distinct Location from company";
              $query_run = mysqli_query($connection, $query);
              $row  = mysqli_num_rows($query_run);
              echo '<h1>' . $row . '</h1>';
              ?>

            </div>
            <p class="leading-relaxed">Locations</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our team -->
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">Owner</h1>
        <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p> -->
      </div>
      <center>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="https://dummyimage.com/200x200">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Sammed Singalkar</h2>
              <h3 class="text-gray-500 mb-3">Owner</h3>
              <p class="mb-4">Web Developer and Online Job portal's owner</p>
              <span class="inline-flex">
                </a>
                <span class="inline-flex justify-start sm:mt-0">
                  <a href="https://www.facebook.com/sammed.singalkar" class="text-blue-500 hover:text-neutral-600">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a href="https://twitter.com/Sammedsingalkar" class="ml-3 text-blue-500 hover:text-neutral-600">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a href="https://www.instagram.com/sammedsingalkar/" class="ml-3 text-blue-500 hover:text-neutral-600">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
            </div>
          </div>
        </div>
      </div>
      </center>
    </div>
  </section>

  <!-- footer -->
  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Job portal</span>
        </a>
        <p class="mt-2 text-sm text-gray-500">Online Job Portal provides jobs. </p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Job Seekers</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="signup.php" class="text-gray-600 hover:text-gray-800">Register Now</a>
            </li>
            <li>
              <a href="user_login.php" class="text-gray-600 hover:text-gray-800">Login</a>
            </li>
            <li>
              <a href="job.php" class="text-gray-600 hover:text-gray-800">Jobs</a>
            </li>
            <li>
              <a href="companies.php" class="text-gray-600 hover:text-gray-800">Companies</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Jobs by places</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="Bengaluru.php" class="text-gray-600 hover:text-gray-800">Jobs in Bengaluru</a>
            </li>
            <li>
              <a href="Delhi.html" class="text-gray-600 hover:text-gray-800">Jobs in Delhi</a>
            </li>
            <li>
              <a href="Mumbai.php" class="text-gray-600 hover:text-gray-800">Jobs in Mumbai </a>
            </li>

            <li>
              <a href="Chennai.html" class="text-gray-600 hover:text-gray-800">Jobs in Chennai</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Information</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Terms and Condition</a>
            </li>
            <li>
              <a href="about us.html" class="text-gray-600 hover:text-gray-800">About us</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Privacy Policy </a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">FAQs</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">Copyright © 2022 Job Portal
          <!-- <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@ job portal /a> -->
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>
</body>

</html>