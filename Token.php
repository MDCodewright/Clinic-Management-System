<?php
	include('headerReceptionist.php');
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
			function generateToken(){
							do{
								var rand=Math.random()*100;
								var random=parseInt(rand);
							}
								while(!(random>0 && random<=100));
								if(random<9){document.getElementById('token').value="000"+random;}
								else
									document.getElementById('token').value="00"+random;
								

						}
		</script>
		
	</head>
<body onload="generateToken()">
	<div id="addDoctor">
		<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="token">Token:</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="token" readonly="true" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="patientID">Patient ID:</label>
			    <div class="col-sm-4"> 
			    <!-- random number -->
					    
			      <input type="text" class="form-control" id="patientID" required>
			      </div>
			     <div class="col-sm-6">
			     	<button type="button" class="btn btn-default">Search</button>
			     </div>
			    
			  </div>
			  <div class="form-group">
			  	<label class="control-label col-sm-2" for="mobile">Mobile</label>
			  	<div class="col-sm-4">
			  		<input type="number" class="form-control" min="0700000000" max="0799999999" placeholder="Enter a valid mobile number" required>
			  	</div>
			  </div>
			  <div class="form-group"> 
			  	<label class="control-label col-sm-2">Adress</label>
			  	<div class="col-sm-4">
			  		<textarea rows="3" columns="40" class="form-control" required></textarea>
			  	</div>
			  </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-5 col-sm-10">
			      <button type="submit" class="btn btn-default" value="Submit">Submit</button>
			    </div>
			  </div>
		</form>
	</div>
</body>
</html>