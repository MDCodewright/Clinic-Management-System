<?php
	include('header.php');
	mysqli_connect('localhost','root','');
	mysqli_select_db('clinic');
	if (isset($_POST['name'])&&isset($_POST['receptionistID'])&&isset($_POST['mobile'])&&isset($_POST['adress']))
	{
		   $name=$_POST['name'];
		   $receptionistID=$_POST['receptionistID'];
		   $mobile=$_POST['mobile'];
	       $adress=$_POST['adress'];
		$query="INSERT INTO login VALUES(NULL,'$receptionistID','$name','$mobile',123456,'Receptionist','$adress','loggedout')";
		if (!$query_run=mysqli_query($query))
		 	{
		 		die('Query did not run');
			}	
		else{
				echo '<script>alert("Receptionist Added Successfully");</script>';
			}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin | Clinic</title>
		<script type="text/javascript" src="Admin.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function randomNumberReceptionist(){
						    do{
						    	var rand=Math.random()*10000;
						    	var random=parseInt(rand);
						    }
						    	while(!(random>=1000 && random<=1100));
						    	document.getElementById('receptionistID').value=random;
						 }
			function normalColor(){
				document.getElementById('name').style.color='black';
			}
		</script>
		
	</head>
<body onload="randomNumberReceptionist()">
	<div id="addDoctor">
		<form class="form-horizontal" role="form" method="POST" action="Add_Receptionist.php">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">Name:</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="name" name="name" onchange="validate()" onfocus="normalColor()" placeholder="Enter name" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="receptionistID">Receptionist ID:</label>
			    <div class="col-sm-4"> 
			    <!-- random number -->
					    
			      <input type="number" class="form-control" name="receptionistID" id="receptionistID" readonly="true">
			    </div>
			  </div>
			  <div class="form-group">
			  	<label class="control-label col-sm-2" for="mobile">Mobile</label>
			  	<div class="col-sm-4">
			  		<input type="number" class="form-control" min="0700000000" max="0799999999" name="mobile" placeholder="Enter a valid mobile number" required>
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
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default" value="Submit">Submit</button>
			    </div>
			  </div>
		</form>
	</div>
</body>
</html>