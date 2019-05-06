<!DOCTYPE html>
<html>
	<head>
		<title>Receptionist | Clinic</title>
		<link rel="stylesheet" type="text/css" href="header.css" />
		<link rel="stylesheet" href="css\bootstrap.min.css" />
		<script type="text/javascript" src="header.js"></script>
	 	<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="Receptionist_Dashboard.php">Receptionist Page</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" id="link">
					<li><a href="Receptionist_Dashboard.php" >Add Patient</a></li>
					<li><a href="Token.php">Token</a></li>
					<li><a href="View_Prescription.php">View Prescription</a></li>
					<!-- <li><a href="Discharge_Patient.php">Discharge Patient</a></li> -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="index.php" class="glyphicon glyphicon-log-out">Logout</a></li>
				</ul>
			</div>	
		</div>
		</nav>
	</body>
</html>