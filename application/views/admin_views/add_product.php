<?php

 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Add Product</title>
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
		</div>
		<div class="container">
			<h3>Add Product</h3>
			<form action="add_product" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label>Product Name</label>
			    <input type="text" class="form-control" placeholder="Name">
			  </div>
			  <label>Description</label>
			  <textarea class="form-control" rows="3" placeholder="Add a description"></textarea>
              <div class="form-group">
                <label>Image</label>
                <input type="file">
              </div>
              <div class="form-group" name="product_image">
                <label>Category</label>
                <input type="text" class="form-control" placeholder="Category">
              </div>
              <div class="form-group">
                <label>Tags</label>
                <input type="text" class="form-control" placeholder="Tags separated by space">
              </div>
              <div id="box_name">
                  <label>Preselected on box</label>
    			  <select class="form-control">
    				  <option>No box</option>
    				  <option>Box Name 1</option>
    				  <option>Box Name 2</option>
    				</select>
            </div>
              <button type="submit" class="btn btn-default">Add</button>
			</form>
		</div>
	</body>
</html>
