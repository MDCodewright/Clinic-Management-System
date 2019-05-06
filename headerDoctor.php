<?php
	mysqli_connect('localhost','root','');
	mysqli_select_db('clinic');
	if (isset($_POST['oldpwd'])&&isset($_POST['newpwd'])&&isset($_POST['newpwd']))
	{
		$oldpassword=$_POST['oldpwd'];
		$newpassword=$_POST['newpwd'];
		$query="SELECT $oldpassword FROM login WHERE user_type='Admin'";
	if (!$query_run=mysqli_query($query))
	 {
	 	die('Query did not run');
	}	
	else{
		if(mysqli_num_rows($query_run)==NULL)
			{
				echo '<script>alert("Wrong password. Try again please");</script>';
			}
		else{
				$query1="UPDATE login SET password='$newpassword'";
				mysqli_query($query1);
				echo "<script> alert('Password changed successfully');</script>";
					header('Location: Doctor_Dashboard.php');
			}
	}
		
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Doctor | Clinic</title>
		<link rel="stylesheet" type="text/css" href="header.css" />
		<link rel="stylesheet" href="css\bootstrap.min.css" />
		<script type="text/javascript" src="header.js"></script>
	 	<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	function checkPassword(){	
		var newpwd=document.getElementById('newpwd').value;
		var reenterpwd=document.getElementById('reenterpwd').value;
		if (newpwd!=reenterpwd) {
			alert('Password doesn\'t match');
		}
	}
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
					<a class="navbar-brand" href="Doctor_Dashboard.php">Doctor's Page</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" id="link">
					<li class="active"><a href="Doctor_Dashboard.php">View Patient</a></li>
					<li><a href="Add_Prescription.php">Add Prescription</a></li>
					<li><a type="button" data-toggle="modal" data-target="#changePassword">Change Password</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="index.php" class="glyphicon glyphicon-log-out">Logout</a></li>
				</ul>
			</div>	
		</div>
		</nav>
		<!-- change password -->
		<div class="modal fade" id="changePassword" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header" align="center">
			CHANGE PASSWORD
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" action="login.php" method="POST" autocomplete="on" onsubmit="checkPassword()">
				  <div class="form-group">
				    <label class="control-label col-sm-4" for="username">Old Password:</label>
				    <div class="col-sm-8"> 
				    <input type="password" class="form-control" placeholder="Enter old password..." id="oldpwd" name="user" required>
				    </div>
				    
				  </div>
				  <div class="form-group">
				    <label  class="control-label col-sm-4" for="pwd">New Password:</label>
				    <div class="col-sm-8">
				    <input type="password" class="form-control" placeholder="Enter new password..." id="newpwd" name="password" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="control-label col-sm-4" for="pwd">Re-Enter New Password:</label>
				    <div class="col-sm-8">
				    <input type="password" class="form-control" placeholder="Re-enter new password..." id="reenterpwd" name="password" required>
				    </div>
				  </div>
			<div class="modal-footer">
				<div class="form-group">
				<div class="col-sm-offset-6">
					<div class="col-sm-3">
						<button class="btn btn-default">Change Password</button>
					</div>
					</div>
					<div class="col-sm-offset-10">
					<div class="col-sm-2">
						<a href="Doctor_Dashboard.php" type="button"><button type="button" class="btn btn-default">Cancel</button></a>
					</div>
				
				</div>
				</div>
				</div>
			</div>
			</form>
			</div>
			</div> 
			</div>
		</div>
</div>
	</body>
</html>