<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<!-- // <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
	// <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<style>
	#container {
	margin: 25px;
	padding: 30px;
	}
	label {
	display: inline-block;
	width: 100px;
	}
	.green {
	background-color:green;
	color:white;
	font-weight: bold;
	}
	.blue {
	background-color:blue;
	color:white;
	font-weight: bold;
	}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div data-role="page" id="pageone">
		<div data-role="main" class="ui-content">
			<div id="container">
			    <div class="row">
			      <div class="col-md-12">
			        <table id="table" class='table table-striped table-bordered'>
			          <thead>
			            <tr>
			              <th>Item</th>
			              <th>Price</th>
			              <th>Quantity</th>
			              <th>Total</th>
			            </tr>
			          </thead>
			          <tbody>
			    <!-- <?php
			            foreach($products as $product)
			            {
			    ?>      <tr>
			                <td><a href="<?= base_url('index.php/products/show_product'). '/' . $product['id']  ?>">
			                    <?= $product['name']; ?></a></td>

			                <td><?= $product['thename']; ?></td>
			                <td><?= $product['created_at']; ?></td>
			                <td>$19.99</td>
			            </tr>

			    <?php   }
			    ?> -->
			          </tbody>
			        </table> <!--end of table -->
			      </div> <!--end of div col -->
			    </div> <!--end of div class row -->

			    <div class="row">
			      <div class="col-md-3 col-md-offset-7"></div>
			      <div class="col-md-2">
			        <h4 class="text-right">Total: $49.96</h4>
			        <form class="text-right" action="">
			          <input type="submit" value="Continue Shopping" class="green">
			        </form>
			      </div>
			    </div><!--end of div class row -->

			    <ul class="pagination">
			      <li class="active"><a href="#">Shopping Cart</a></li>


				  <li><a href="#pagetwo" data-transition="slidefade">Shipping Info</a></li>
			    </ul>

			</div> <!--end of div container -->
		</div><!--end of div main -->
	</div> <!--end of div pageone -->

	<div data-role="page" id="pagetwo">
		<div id="container">
		    <form id='register' action="" method='post'>
				<fieldset style="display:block; width:365px;">
					<legend style="text-align:left;">Shipping Information</legend>
					<input type='hidden' name='action' value='register'/>
					<br><br>

					<label for='first_name' >First Name: </label>
					<input type='text' name='first_name' maxlength="50" />
					<br><br>

					<label for='last_name' >Last Name: </label>
					<input type='text' name='last_name' maxlength="50" />
					<br><br>

					<label for='email' >Email:</label>
					<input type='text' name='email' id='email' maxlength="50" />
					<br><br>

					<label for='address' >Address:</label>
					<input type='text' name='address' id='address' maxlength="50" />
					<br><br>

					<label for='address2' >Address2:</label>
					<input type='text' name='address2' id='address2' maxlength="50" />
					<br><br>

					<label for='password' >City:</label>
					<input type='password' name='password_confirmation' id='password_confirmation' maxlength="50" />
					<br><br>

					<label for='' >State:</label>
					<input type='text' name='state' id='state' maxlength="2" />
					<br><br>

					<label for='' >Zip Code:</label>
					<input type='text' name='zip' id='zip' maxlength="5" />
					<br><br>

					<input type='submit' value='Enter Shipping Address' class="blue"/>
				</fieldset>
		    </form>

		    <ul class="pagination">
				<li><a href="#pageone">Shopping Cart</a></li>
				<li class="active"><a href="#">Shipping Info</a></li>
		    </ul>
		</div><!--end of div container -->
	</div> <!--end of div pagetwo -->
	<?php include 'footer.php' ?>
</body>
</html>
