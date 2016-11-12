<?php require('dbcinfi.php'); ?>
<!DOCTYPE html>
		<head>
			<title>Workshop || Tnstructor</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>

			<body>

					<?php
						$sql = "SELECT * FROM info";
						$result = $conn->query($sql);
					?>

					<div class="container">
					<h2>All students data</h2>

					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Dept</th>
								<th>Reg</th>
							</tr>
						</thead>

					<?php

							if($result->num_rows > 0) {

								while ($row = $result->fetch_assoc()) {
									echo '<tr class ="success">
										  <td>'.$row["name"].'</td>
										  <td>'.$row["email"].'</td>
										  <td>'.$row["name"].'</td>
										  <td>'.$row["reg"].'</td>

										  </tr>';

								}
								
							}
							else{
								echo "o result";
							}
							$conn->close();
					?>
			</body>


</html>