<?php

 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Orders</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 	</head>
	<body>
        <?php include 'navbar.php' ?>
		<div class="container">
			<h3>Orders</h3>
			<div class="panel panel-default">
			  <table class="table">
				  <thead>
					  <tr>
						  <th>ID</th>
						  <th>address 1</th>
						  <th>City</th>
						  <th>State</th>
						  <th>Status</th>
						  <th>Action</th>
					  </tr>
				  </thead>
				  <tbody>
					  <tr>
						  <td>1</td>
						  <td>3415 4th Ave</td>
						  <td>Sacramento</td>
						  <td>CA</td>
						  <td id="ordered">Ordered</td>
						  <td><a class="btn btn-default btn-xs" href="#" role="button">Shipped</a>
						  <a class="btn btn-default btn-xs" href="#" role="button">View</a></td>
					  </tr>
				  </tbody>
			  </table>
			</div>
		</div>
	</body>
</html>
