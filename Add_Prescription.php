<?php
	    include('headerDoctor.php');
	
		// if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['searchRecord']))
		//     {
		//         patientName();
		//     }

	function patientName(){
		echo "mimi huyo";
		// mysql_connect('localhost','root','');
		// mysql_select_db('clinic');
		// if (isset($_POST['patientID']))
		// {
		// 	$patientID=$_POST['patientID'];
		// 	$query="SELECT name FROM patients WHERE patientID='$ptientID'";
		// if (!$query_run=mysql_query($query))
		//  {
		//  	die('Query did not run');
		// }	
		// else{
		// 	if(mysql_num_rows($query_run)==NULL)
		// 		{
		// 			echo '<script>alert("Patient doesn\'t exist!!! Try Again");</script>';
		// 		}
		// 	else{
		// 			while($row = $result->fetch_assoc()) {
	 //       				$name=$row["name"];
		// 			}
		// 		 }
		// 		echo $_POST['name']==$name;
		// 		}
		// 	}
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

	</head>

<body>
	<div id="addDoctor">
		<form class="form-horizontal" role="form" method="post" action="Add_Prescription.php">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="name">PatientID:</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="name" name="patientID" placeholder="Enter patientID to search patient..." required>
			      </div>
			     <div class="col-sm-6">
			     	<button type="button" class="btn btn-default" name="searchRecord" onclick="patientName()">Search</button>
			     </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="receptionistID">Name:</label>
			    <div class="col-sm-4"> 
			    <!-- random number -->
					    
			      <input type="text" class="form-control" name="name" readonly="true">
			    </div>
			  </div>
			  <div class="form-group">
			  	<label class="control-label col-sm-2" for="disease">Disease:</label>
			  	<div class="col-sm-4">
			  		<input type="text" class="form-control" placeholder="What's the problem?" name="disease" required>
			  	</div>
			  </div>
			  <div class="form-group"> 
			  	<label class="control-label col-sm-2">Prescription:</label>
			  	<div class="col-sm-4">
			  		<textarea rows="3" columns="40" class="form-control" required></textarea>
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