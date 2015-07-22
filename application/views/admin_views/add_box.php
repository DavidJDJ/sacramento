<?php
var_dump($this->session->all_userdata());
var_dump($this->upload->data());
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Add Box</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../assets/styles/style_adminpage.css">
 	</head>
	<body>
		<!-- <div class="nav-side-menu">
		    <div class="brand">Sacramento Logo</div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
				<ul id="menu-content" class="menu-content collapse out">
					  <a href="../admin/" class="dash_link">
    					<li>
    					  <i class="fa fa-dashboard fa-lg"></i> Dashboard
    					</li>
    				  </a>
					<li  data-toggle="collapse" data-target="#products" class="collapsed">
					  <a href="#"></i>Orders<span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="products">
						<a href="../admin/ordered" class="dash_link"><li>Ordered</li></a>
						<a href="../admin/shipped" class="dash_link"><li>Shipped</li></a>
					</ul>
					<li data-toggle="collapse" data-target="#service" class="collapsed">
					  <a href="#">Products<span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="service">
					  <a href="../admin/products" class="dash_link"><li>Products</li></a>
					  <a href="../admin/add_product" class="dash_link"><li>Add Product</li></a>
					  <a href="../admin/add_box" class="dash_link"><li>Add Box</li></a>
					</ul>
                    <ul class="sub-menu">
                         <a href="admin/log_out" class="dash_link"><li>Log Out</li></a>
                    </ul>
				</ul>
		 </div>
		</div> -->
		<div class="container">
			<h3>Add Box</h3>
			<form method="post" action="add_box" enctype="multipart/form-data">
			  <div class="form-group">
				<label>Box Name</label>
				<input type="text" class="form-control" placeholder="Name" name="name">
			  </div>
			  <labe>Description</labe>
			  <textarea class="form-control" rows="3" placeholder="Add a description" name="description"></textarea>
			  <div class="form-group">
				<label>Image</label>
				<input type="file" name="image">
			  </div>
			  <label>Price</label>
			  <div class="input-group" id="price_div">
				<div class="input-group-addon">$</div>
				<input type="text" class="form-control" placeholder="Amount" name="amount">
			  </div>
              <label>Amount of items</label>
			  <div class="input-group" id="price_div">
				<div class="input-group-addon">I</div>
				<input type="text" class="form-control" placeholder="Item Amount" name="item_amount">
			  </div>
			  <button type="submit" class="btn btn-default">Add</button>
			</form>
		</div>
	</body>
</html>
