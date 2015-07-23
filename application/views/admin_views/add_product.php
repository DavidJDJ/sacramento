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
 	</head>
	<body>
        <?php include 'navbar.php' ?>
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
