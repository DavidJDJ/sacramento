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
        <?php  include 'navbar.php' ?>
		<div class="container">
            <div id="errors">
            <?php if ($this->session->flashdata('errors')) {
                    $errors = $this->session->flashdata('errors');
                        for($i=0; $i < count($errors); $i++) {
                            echo  $errors[$i]. "<br>";
                        }
                  }
                  if ($this->session->flashdata('validation_errors')) {
                      echo $this->session->flashdata('validation_errors');
                  } ?>
              </div>
			<h3>Add Product</h3>
			<form action="add_product" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label>Product Name</label>
			    <input type="text" class="form-control" placeholder="Name" name="name">
			  </div>
			  <label>Description</label>
			  <textarea class="form-control" rows="3" placeholder="Add a description" name="description"></textarea>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="image">
              </div>
              <div id="box_name">
                  <label>Preselected on box</label>
    			  <select class="form-control" name="preselected_box">
    				  <option value="0">No box</option>
    				  <?php foreach ($boxes as $box) {
    				      ?><option value="<?= $box['id'] ?>"><?= $box['name'] ?></option>
    				 <?php } ?>
    			  </select>
            </div>
              <button type="submit" class="btn btn-default">Add</button>
			</form>
		</div>
	</body>
</html>
