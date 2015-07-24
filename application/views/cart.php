<?php
// var_dump($this->session->all_userdata());
// var_dump($products);
// var_dump($carts);
// var_dump($this->session->flashdata('errors'));
$price = 0;
$carts = $this->session->userdata('cart');
function this_page()
      {
          $page='cart';
          return $page;
      }
 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
	<!-- // <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
	<!-- // <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->


    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	   <!-- Stripe javascript source code -->
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
	  // This identifies your website in the createToken call below
	  Stripe.setPublishableKey('pk_test_6pRNASCoBOKtIshFeQd4XMUh');
	  // ...
	</script>
	<script>
	$(document).ready(function(){
		$('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').focus()
		})
		jQuery(function($) {
		  $('#payment-form').submit(function(event) {
		    var $form = $(this);

		    // Disable the submit button to prevent repeated clicks
		    $form.find('button').prop('disabled', true);

		    Stripe.card.createToken($form, stripeResponseHandler);

		    // Prevent the form from submitting with the default action
		    return false;
		  });
		});
		function stripeResponseHandler(status, response) {
			var $form = $('#payment-form');
			if (response.error) {
				// Show the errors on the form
				$form.find('.payment-errors').text(response.error.message);
				$form.find('button').prop('disabled', false);
			} else {
				// response contains id and card, which contains additional card details
				var token = response.id;
				// Insert the token into the form so it gets submitted to the server
				$form.append($('<input type="hidden" name="stripeToken" />').val(token));
				// and submit
				$form.get(0).submit();
			}
		};
	});
	</script>
	<style>
    body
    {
        background-color: white !important;
    }
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
	table {
		background-color: white;
	}
    .errors {
        color: red;
    }
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
			<div id="container">
			    <div class="row">
			      <div class="col-md-12">
                  <div class="errors">
                      <?php if ($this->session->flashdata('errors')) {
                          echo $this->session->flashdata('errors');
                      } ?>
                  </div>
			        <table id="table" class='table table-bordered'>
			          <thead>
			            <tr>
			              <th>Box</th>
			              <th>Products</th>
			              <th>Price</th>
			            </tr>
			          </thead>
			          <tbody>
						  <?php if (!empty($carts)) {
                          foreach ($carts as $cart => $value) { ?>
							  <tr>
								  <td><?= $value['box'] ?></td>
								  <td><?php $keys = array_keys($value);
								  for($i = 2; $i < count($keys); $i++) {
								  	?><p><?= $keys[$i] ?></p>
								  <?php } ?>
								  </td>
								  <td>$<?= $value['box_price'] ?></td>
								  <?php $price += $value['box_price'] ?>
							  </tr>
						  <?php }
                      } else {?>
                          <center><h1>Your cart is empty</h1></center>
                          <?php } ?>
			          </tbody>
			        </table> <!--end of table -->
			      </div> <!--end of div col -->
			    </div> <!--end of div class row -->
			    <div class="row">
			      <div class="col-md-3 col-md-offset-7">
			        <h4 class="text-right">Total: $<?= $price ?></h4>
				  </div>
				</div>
					<div class="col-md-2 col-md-offset-8">
						<a class="btn btn-default" href="shop" role="button">Keep shoping</a>
					</div>
					<div class="col-md-1">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
						  Pay
						</button>
					</div>
					<!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Payment</h4>
                          </div>
                          <div class="modal-body">
                    		  <form action="confirmation" method="POST" id="payment-form">
                                  <input type="hidden" name="amount" value="<?= $price ?>">
                    		    <span class="payment-errors"></span>
                    			<div class="form-row">
                    			  <label>
                    				<span>First Name</span>
                    				<input type="text" size="20" name="first_name"/>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>Last Name</span>
                    				<input type="text" size="20" name="last_name"/>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>Address 1</span>
                    				<input type="text" size="20" name="address_1"/>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>Address 2</span>
                    				<input type="text" size="20" name="address_2"/>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>City</span>
                    				<input type="text" size="20" name="city"/>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>State</span>
                    				<select>
                    					<option value="AL">Alabama</option>
                    					<option value="AK">Alaska</option>
                    					<option value="AZ">Arizona</option>
                    					<option value="AR">Arkansas</option>
                    					<option value="CA">California</option>
                    					<option value="CO">Colorado</option>
                    					<option value="CT">Connecticut</option>
                    					<option value="DE">Delaware</option>
                    					<option value="DC">District Of Columbia</option>
                    					<option value="FL">Florida</option>
                    					<option value="GA">Georgia</option>
                    					<option value="HI">Hawaii</option>
                    					<option value="ID">Idaho</option>
                    					<option value="IL">Illinois</option>
                    					<option value="IN">Indiana</option>
                    					<option value="IA">Iowa</option>
                    					<option value="KS">Kansas</option>
                    					<option value="KY">Kentucky</option>
                    					<option value="LA">Louisiana</option>
                    					<option value="ME">Maine</option>
                    					<option value="MD">Maryland</option>
                    					<option value="MA">Massachusetts</option>
                    					<option value="MI">Michigan</option>
                    					<option value="MN">Minnesota</option>
                    					<option value="MS">Mississippi</option>
                    					<option value="MO">Missouri</option>
                    					<option value="MT">Montana</option>
                    					<option value="NE">Nebraska</option>
                    					<option value="NV">Nevada</option>
                    					<option value="NH">New Hampshire</option>
                    					<option value="NJ">New Jersey</option>
                    					<option value="NM">New Mexico</option>
                    					<option value="NY">New York</option>
                    					<option value="NC">North Carolina</option>
                    					<option value="ND">North Dakota</option>
                    					<option value="OH">Ohio</option>
                    					<option value="OK">Oklahoma</option>
                    					<option value="OR">Oregon</option>
                    					<option value="PA">Pennsylvania</option>
                    					<option value="RI">Rhode Island</option>
                    					<option value="SC">South Carolina</option>
                    					<option value="SD">South Dakota</option>
                    					<option value="TN">Tennessee</option>
                    					<option value="TX">Texas</option>
                    					<option value="UT">Utah</option>
                    					<option value="VT">Vermont</option>
                    					<option value="VA">Virginia</option>
                    					<option value="WA">Washington</option>
                    					<option value="WV">West Virginia</option>
                    					<option value="WI">Wisconsin</option>
                    					<option value="WY">Wyoming</option>
                    				</select>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>Zip code</span>
                    				<input type="text" size="20" name="zip"/>
                    			  </label>
                    			</div>
                    			<div class="form-row">
                    			  <label>
                    				<span>Email Address</span>
                    				<input type="text" size="20" name="email"/>
                    			  </label>
                    			</div>
                    		    <div class="form-row">
                    		      <label>
                    		        <span>Card Number</span>
                    		        <input type="text" size="20" data-stripe="number"/>
                    		      </label>
                    		    </div>

                    		    <div class="form-row">
                    		      <label>
                    		        <span>CVC</span>
                    		        <input type="text" size="4" data-stripe="cvc"/>
                    		      </label>
                    		    </div>

                    		    <div class="form-row">
                    		      <label>
                    		        <span>Expiration (MM/YYYY)</span>
                    		        <input type="text" size="2" data-stripe="exp-month"/>
                    		      </label>
                    		      <span> / </span>
                    		      <input type="text" size="4" data-stripe="exp-year"/>
                    		    </div>
                    	      </div>
                    	      <div class="modal-footer">
                    	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    	        <button type="submit" class="btn btn-primary">Pay</button>
                    	      </div>
                    	  </form>
                        </div>
                      </div>
                    </div>
		    </div><!--end of div class row -->
	<?php include 'footer.php' ?>
</body>
</html>
