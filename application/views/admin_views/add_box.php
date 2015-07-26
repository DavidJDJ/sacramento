<?php
// var_dump($this->session->all_userdata());
// var_dump($this->session->flashdata());
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Add Box</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 	</head>
	<body>
        <?php include 'navbar.php' ?>
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
