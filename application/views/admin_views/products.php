<?php
var_dump($products);
var_dump($boxes);
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Products</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
        .table-img {
            width: 50px;
            height: 50px;
        }
        form {
            display: inline-block;
        }
        </style>
 	</head>
	<body>
        <?php //include 'navbar.php' ?>
		<div class="container">
			<h3>Products</h3>
			<div class="panel panel-default">
			  <table class="table">
				  <thead>
					  <tr>
						  <th>Image</th>
						  <th>Name</th>
						  <th>Quantity Sold</th>
						  <th>Action</th>
					  </tr>
				  </thead>
				  <tbody>
                      <?php foreach ($products as $product) { ?>
                          <tr>
                              <td><img src="../<?= $product['image'] ?>" class="table-img"></td>
                              <td><?= $product['name'] ?></td>
                              <td> </td>
                              <td>
                                  <form action='products' method="post">
                                      <input type="hidden" name="product" value="product">
                                      <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                      <input class="btn btn-default" type="submit" value="remove">
                                  </form>
                                  <a class="btn btn-default" href="edit_prod/<?= $product['id'] ?>" role="button">Edit</a>
                              </td>
                          </tr>
                      <? } ?>
				  </tbody>
			  </table>
			</div>
			<h3>Boxes</h3>
			<div class="panel panel-default">
			  <table class="table">
				  <thead>
					  <tr>
						  <th>Image</th>
						  <th>Name</th>
						  <th>Quantity Sold</th>
						  <th>Action</th>
					  </tr>
				  </thead>
				  <tbody>
                      <?php foreach ($boxes as $box) { ?>
                          <tr>
                              <td><img src="../<?= $box['img'] ?>" class="table-img"></td>
                              <td><?= $box['name'] ?></td>
                              <td> </td>
                              <td>
                                  <form action='admin/products' method="post">
                                      <input type="hidden" name="product" value="box">
                                      <input type="hidden" name="id" value="<?= $box['id'] ?>">
                                      <input class="btn btn-default" type="submit" value="remove">
                                  </form>
                                  <a class="btn btn-default" href="edit/<?= -$box['id'] ?>" role="button">Edit</a>
                              </td>
                          </tr>
                      <? } ?>
				  </tbody>
			  </table>
			</div>
		</div>
	</body>
</html>
