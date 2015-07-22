<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$salt = bin2hex(openssl_random_pseudo_bytes(22));
echo $salt;
echo "<br>";
$password = md5("password" . '' . $salt);
echo $password;
echo "<br>";
var_dump($this->session->flashdata('errors'));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">
    body
    {
      background-color: #C5CFD7;
    }
    #login{
    	background-color: #232F3E;
    	height: auto;
    	margin-top: 20%;
    	color: white;
    	border-radius: 5px;
    	padding-top: 40px;
    	padding-bottom: 30px;

    }
    #img_form{
    	width: 80%;
    	border-bottom: 1px solid silver;
    	margin-bottom: 40px;
    }
   </style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
 <body>
  	<div class="container">
	<div class="row">
		<div id= "login"class="col-md-5 col-md-offset-3">
		<center><div id="img_form">
		<img src="../assets/img/company_logo.png" width=200 height=200>
		</div></center>
		</img>
        <?php if ($this->session->flashdata('errors')) {
            echo $this->session->flashdata('errors');
        } ?>
		<form action="../admin/login" method="post">
		  <div class="form-group">
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
  	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
