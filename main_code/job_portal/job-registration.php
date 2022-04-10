<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <title>Signup</title>

    <style type="text/css">
        body{
            /* background-image: url("https://www.wallpapers13.com/wp-content/uploads/2018/11/Dolomiti-Italy-Autumn-Lago-Antorno-landscape-photography-Desktop-HD-Wallpaper-For-PC-Tablet-And-Mobile-3840x2400-1920x1080.jpg"); */
            background-image: url("job-registration.jpg");
        }
        #main_content {
            margin-top: 11vh;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            color:white;
            background-color: transparent; 
        }
    </style>

</head>

<body>
    <div class="col-md-8" id="main_content">
        <center>
            <h3>Company Registration Form</h3>
        </center>
        <form action="apply.php" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Your name" required>
            </div>
            <div class="form-group">
                <label for="name">Company name</label>
                <input type="text" name="company_name" class="form-control" placeholder="company" required>
            </div>

            <div class="form-group">
                <label for="birthday">Date</label>
                <input type="date" value="0000-00-00" class="form-control" name="date">
            </div>

            <div class="form-group">
                <label for="name">post</label>
                <input type="text" name="post" class="form-control" placeholder="post" required>
            </div>
            <center>
            <button type="submit" class="btn btn-primary">Register</button>
            </center>
        </form>
    </div>
</body>

</html>