<!DOCTYPE html>
<html>
	<head>
		<title>Admin | Clinic</title>
		<link rel="stylesheet" type="text/css" href="header.css" />
		<link rel="stylesheet" href="css\bootstrap.min.css" />
		<script type="text/javascript" src="header.js"></script>
	 	<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	$('li').click(function(){
		$('li').css("color", "yellow");
		return false;
	});

</script>
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
					<a class="navbar-brand" href="Admin.php">Admin Page</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" id="link">
					<li class="active"><a href="Admin.php" >Add Doctor</a></li>
					<li><a href="Add_Receptionist.php">Add Receptionist</a></li>
					<li><a href="View_Patient.php">View Patient</a></li>
					<li><a href="View_Doctor.php">View Doctors</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="index.php" class="glyphicon glyphicon-log-out">Logout</a></li>
				</ul>

			</div>
			</div>
		</nav>
	</body>
</html>