<!DOCTYPE html>
<html>
<head>
	<title>Workshop || Tnstructor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

	<h2>Data Collector</h2>

	<?php

	if(!empty($_GET['meg'])){
		echo $_GET['meg'];
	}

	?>
		

		<form  class="form-group" action="data.php" method="POST">
		 
		  <div class="col-md-6">
		   <label class="control-label col-md-2" for="name">Name::</label>
		  	<input type="text" name="name" class="form-control" placeholder="Enter your full name">
		  </div>
		  </div><br>

		  <div class="form-group">
		  <div class="col-md-6">
		  <label class="control-label col-md-2" for="email">Email::</label>
		  	<input type="text" name="email" class="form-control" placeholder="someone@example.com">
		  </div>
		  </div><br>

		  <div class="form-group">
		  <div class="col-md-6">
		    <label class="control-label col-md-2" for="dept">Dept::</label>
		  	<input type="text" name="dept" class="form-control" placeholder="Enter your dept name">
		  </div>
		  </div><br>

		  <div class="form-group">
		  <div class="col-md-6">
		  <label class="control-label col-md-2" for="reg">Reg::</label>
		  	<input type="text" name="reg" class="form-control" placeholder="201XXXXXXX">
		  </div>
		  </div><br>

		  <div class="form-group">
		  	<div class="col-sm-offset-2 col-md-6">
		  		<br><button type="submit" class="btn btn-primary">Submit</button>
		  	</div>
		  </div>

	</form>
</body>
</html>