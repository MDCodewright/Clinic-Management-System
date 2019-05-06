<?php
include('header.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT userid,name,mobile,Adress FROM login WHERE user_type='DOCTOR'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-hover'><tr><th>doctorID</th><th>Name</th><th>Mobile</th><th>Adress</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["userid"]."</td><td>".$row["name"]."</td><td>".$row["mobile"]."</td><td>".$row["Adress"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
	<head>
		<title>View Doctor | Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		
	</body>
</html>