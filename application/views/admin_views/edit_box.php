<?php
// var_dump($boxes);
// var_dump($box);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<link rel="stylesheet" href="../../assets/styles/style_adminpage.css">

		<div class="nav-side-menu">
			<div class="brand">Sacramento Logo</div>
			<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
			<div class="menu-list">
				<ul id="menu-content" class="menu-content collapse out">
					  <a href="../../admin/" class="dash_link">
						<li>
						  <i class="fa fa-dashboard fa-lg"></i> Dashboard
						</li>
					  </a>
					<li  data-toggle="collapse" data-target="#products" class="collapsed">
					  <a href="#"></i>Orders<span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="products">
						<a href="../../admin/ordered" class="dash_link"><li>Ordered</li></a>
						<a href="../../admin/shipped" class="dash_link"><li>Shipped</li></a>
					</ul>
					<li data-toggle="collapse" data-target="#service" class="collapsed">
					  <a href="#">Products<span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="service">
					  <a href="../../admin/products" class="dash_link"><li>Products</li></a>
					  <a href="../../admin/add_product" class="dash_link"><li>Add Product</li></a>
					  <a href="../../admin/add_box" class="dash_link"><li>Add Box</li></a>
					</ul>
					<ul class="sub-menu">
						 <a href="../../admin/log_out" class="dash_link"><li>Log Out</li></a>
					</ul>
				</ul>
		 </div>
		</div>
		<div class="container">
			<form action="../update_box" method="post">
			  <input type="hidden" value="<?= $box['id'] ?>" name="id">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" value="<?= $box['name'] ?>" name="name">
			  </div>
			  <label for="name">Description</label>
			  <textarea class="form-control" rows="3" name="description"><?= $box['description'] ?></textarea>
			  <label for="name">Number of Items in the Box</label>
			  <input type="text" class="form-control" id="item_amount" value="<?= $box['item_amount'] ?>" name="item_amount">
			  <label for="name">Price</label>  
			  <input type="text" class="form-control" id="price" value="<?= $box['price'] ?>" name="price">			  
			  <button type="submit" class="btn btn-default">Update</button>
			</form>
		</div>
	</body>
</html>
