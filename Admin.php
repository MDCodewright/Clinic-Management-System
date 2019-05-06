<?php
	include('header.php');
	mysqli_connect('localhost','root','');
	mysqli_select_db('clinic');
	if (isset($_POST['name'])&&isset($_POST['doctorID'])&&isset($_POST['mobile'])&&isset($_POST['adress']))
	{
		   $name=$_POST['name'];
		   $doctorID=$_POST['doctorID'];
		   $mobile=$_POST['mobile'];
	       $adress=$_POST['adress'];
		$query="INSERT INTO login VALUES(NULL,'$doctorID','$name','$mobile',123456,'Doctor','$adress','loggedout')";
		if (!$query_run=mysqli_query($query))
		 	{
		 		die('Query did not run');
			}	
		else{
				echo '<script>alert("Doctor Added Successfully");</script>';
			}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin | Clinic</title>
		<link rel="stylesheet" type="text/css" href="Admin.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- <script src="C:\xampp\htdocs\ClinicManagementSystem\Admin.js"> -->
		</script>
		<script src="C:\xampp\htdocs\ClinicManagementSystem\js\jquery-1.12.0.min.js">
		</script>
		<script src="C:\xampp\htdocs\ClinicManagementSystem\js\bootstrap.min.js">
		</script>

		<script type="text/javascript">
			function randomNumberDoctor(){
						    do{
						    	var rand=Math.random()*1000;
						    	var random=parseInt(rand);
						    }
						    	while(!(random>=100 && random<=110));
						    	document.getElementById('doctorID').value=random;
			}
			function normalColor(){
				document.getElementById('name').style.color='black';
			}

			function validateForm(){
				var pattern = new RegExp("\\D");
				var doctor_name = document.addDoctorForm.name.value;
				if(! (pattern.test(doctor_name)))
				{
					document.getElementById("validateName").innerHTML = "Invalid name!";
					document.addDoctorForm.name.focus();
					return false;	
				}
				else{
					document.getElementById("validateName").innerHTML = "";
				}

			}

			
		</script>
	</head>
	
<body onload="randomNumberDoctor()">
	<div id="addDoctor">
		<form class="form-horizontal" role="form" method="POST" action="Admin.php" onsubmit="return(validateForm());" name="addDoctorForm">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Name:</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" onkeyup="return(validateForm());" onfocus="normalColor()" required>
			      <label id="validateName" style="color: red; font-size: 10px;"></label>
			    </div>
			    	<label class="control-label col-sm-1" id="validateName" style="color: red; font-size: 10px;"></label>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="doctorID">Doctor ID:</label>
			    <div class="col-sm-4"> 
			    <!-- random number -->
					    
			      <input type="number" class="form-control" id="doctorID" name="doctorID" readonly="true">
			    </div>
			  </div>
			  <div class="form-group">
			  	<label class="control-label col-sm-2" for="mobile">Mobile</label>
			  	<div class="col-sm-4">
			  		<input type="number" class="form-control" name="mobile" min="0700000000" max="0799999999" placeholder="Enter mobile number" required>
			  	</div>
			  </div>
			  <div class="form-group"> 
			  	<label class="control-label col-sm-2">Adress</label>
			  	<div class="col-sm-4">
			  		<textarea rows="3" columns="40" class="form-control" name="adress" required></textarea>
			  	</div>
			  </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-5 col-sm-7">
			      <button type="submit" class="btn btn-default" value="Submit">Submit</button>
			    </div>
			  </div>
		</form>
	</div>
</body>
</html>