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

                
                // Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
                
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
                
                
$sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mritunjay', 'Kumar', 'mritunjayemail@gmail.com');";
$sql2 .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Shaurya', 'Kumar', 'shaurya@goodboy.com');";
$sql2 .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Rakhi', 'Prasad', 'rakhi@television.com')";

if ($conn->multi_query($sql2) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}                
                

$sql1 = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql1);
                
 echo "<table class="table table-hover">"
 echo "<thead>"
 echo "<tr>"
 echo "<th scope="col">#</th>"
 echo "<th scope="col">First Name</th>"
 echo "<th scope="col">Last Name</th>"
 echo "</tr>"
 echo "</thead>"
 echo "<tbody>"      

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo "<tr>"
    echo "<th scope="row">" . $row["id"]. "</th>"
    echo "<td>" . $row["firstname"]. "</td>"
    echo "<td>" . $row["lastname"]. "</td>"
    echo "</tr>"

        
    }
} else {
    echo "0 results";
}
                
echo "</tbody>"
echo "</table>"

$conn->close();
                
                
                
                
                ?>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
