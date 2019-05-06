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

$sql = "SELECT patientID, name, mobile FROM patients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-hover'><tr><th>patientID</th><th>Name</th><th>Mobile</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["patientID"]."</td><td>".$row["name"]."</td><td>".$row["mobile"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
	<head>
		<title>View Patient | Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<table class="table-stripped">
			<tr id="id"></tr>
			<tr id="firstname"></tr>
			<tr id="lastname"></tr>
		</table>
	</body>
</html>