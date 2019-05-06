	<?php
	//include("loginhtml.php");
	mysqli_connect('localhost','root','');
	mysqli_select_db('clinic');
	if (isset($_POST['userid'])&&isset($_POST['password'])&&isset($_POST['users']))
	{
		$users=$_POST['users'];
		$username=$_POST['userid'];
		$password=$_POST['password'];
		$query="SELECT userid,password,user_type FROM login WHERE userid='$username' AND password='$password' AND user_type='$users'";
	if (!$query_run=mysqli_query($query))
	 {
	 	die('Query did not run');
	}	
	else{
		if(mysql_num_rows($query_run)==NULL)
			{
				echo '<script>alert("User doesn\'t exist!!! Try Again");</script>';
			}
		else{
				if ($users=='Admin') {
					echo '<script>alert("Hello Admin. Welcome");</script>';
						header('Location: Admin.php');
					
				}
				elseif ($users=='Doctor') {
					echo '<script>alert("Hello Doctor. Welcome");</script>';
						header('Location: Doctor_Dashboard.php');
					// header('Location: Admin.php');
				}
				elseif ($users=='Receptionist') {
					echo '<script>alert("Hello Receptionist. Welcome");</script>';\
						header('Location: Receptionist_Dashboard.php');
					// header('Location: Admin.php');
				}
				// header('Location: Login.php');
			}
	}
		
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>		
		<title>Login | Clinic Mangement></title>
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="loader.css">
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="loader.js"></script>
</head>
<div id="loader"></div>
<body onload="myFunction()">
	<div id="myDiv" style="visibility:hidden;" >
		<marquee><h2 style="color:#0e86c5;">Welcome to our Clinic Management System</h2></marquee>
		<h3 style="text-align:left;color:#839eb3;margin-left:45%;">Login Below</h3>
			<div class="container">
				<div class="well" id="login_form">
				<div class="theForm">
					<form role="form" action="index.php" method="POST" id="myform">
						<div class="form-group">
							<!-- userid -->
							<label for="userId" style="font:20px TimesNewRoman;color:white;">User ID:</label>
							<input type="text"	class="form-control" onfocus="changeOpacity()" placeholder="Enter user id" id="userid" name="userid" required />
							<!-- password -->
							<div class="passwordField">
							<label for="password" style="font:20px TimesNewRoman;color:white;">Password:</label>
							<input type="password"	class="form-control" placeholder="Enter password" id="pwd" name="password" required/></br>
							</div>
							<input list="User type" class="form-control" placeholder="Select user type" id="users" name="users" required />

								<datalist id="User type">
									<option>Admin</option>
									<option>Doctor</option>
									<option>Receptionist</option>
								</datalist>
							<!-- submit -->
							<a href="forgotPassword.php" style="color:white;">Forgot Password?</a>
							<input type="submit" style="color:white;" value="Login" id="submit" />

						</div>
						
					</form>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>