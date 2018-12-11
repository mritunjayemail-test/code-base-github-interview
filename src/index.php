<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mritunjay Kumar test App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Congratulations...Mritunjay</h1>
                <p>Your Connection with database result is:.</p>
 
                <?php 
                $username = "admin"; 
                $password = "MyDBPass123"; 
                $hostname = "tm12u8la5vbpqn5.cvkqavmqhnef.eu-west-1.rds.amazonaws.com"; 
                $dbname = "MyDatabase";

                //connection to the database
                $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL"); 
                echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>"; 
                $selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again.");
                ?>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
