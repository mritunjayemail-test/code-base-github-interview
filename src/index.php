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
                <h1>Hello Congratulations...Mritunjay</h1>
                <p>Your Connection with database result is:.</p>
 
                <?php 
                $username = "admin"; 
                $password = "MyDBPass123"; 
                $hostname = "mm1d1q0jw529s1k.cvkqavmqhnef.eu-west-1.rds.amazonaws.com"; 
                $dbname = "MyDatabase";

                //connection to the database
                $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL"); 
                echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>"; 
                $selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again."); 
              // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mritunjay', 'Kumar', 'mritunjayemail@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

                $sql1 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Shaurya', 'Kumar', 'shauryakumar@goodboy.com')";

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

                
$conn->close();      
                
                ?>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
