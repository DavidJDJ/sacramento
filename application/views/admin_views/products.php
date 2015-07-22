<?php

 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Products</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../assets/styles/style_adminpage.css">
 	</head>
	<body>
		<div class="nav-side-menu">
		    <div class="brand">Sacramento Logo</div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
			<div class="menu-list">
				<ul id="menu-content" class="menu-content collapse out">
					<li>
					  <a href="#">
					  <i class="fa fa-dashboard fa-lg"></i> Dashboard
					  </a>
					</li>
					<li  data-toggle="collapse" data-target="#products" class="collapsed">
					  <a href="#"></i>Orders<span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="products">
						<a href="#" id="dash_link"><li>Ordered</li></a>
						<a href="#" id="dash_link"><li>Shipped</li></a>
					</ul>
					<li data-toggle="collapse" data-target="#service" class="collapsed">
					  <a href="#">Products<span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="service">
					  <a href="#" id="dash_link"><li>Products</li></a>
					  <a href="#" id="dash_link"><li>Add Product</li></a>
					  <a href="#" id="dash_link"><li>Add Box</li></a>
					</ul>
				</ul>
		 </div>
		</div>
		<div class="container">
			<h3>Products</h3>
			<div class="panel panel-default">
			  <table class="table">
				  <thead>
					  <tr>
						  <th>Picture</th>
						  <th>Name</th>
						  <th>Inventory Count</th>
						  <th>Quantity Sold</th>
						  <th>Action</th>
					  </tr>
				  </thead>
				  <tbody>
					  <tr>
						  <td>Picture</td>
						  <td>T-Shirt</td>
						  <td>12</td>
						  <td>300</td>
						  <td>action</td>
					  </tr>
				  </tbody>
			  </table>
			</div>
		</div>
	</body>
</html>
