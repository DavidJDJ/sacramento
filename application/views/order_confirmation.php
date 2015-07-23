<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function this_page()
      {
          $page='shop'; 
          return $page;
      }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
    body
    {
      background-color: white !important;
    }
    a{
      text-decoration: none !important;
      color: white !important;
    }
    .container{
      margin-bottom: 20px;
    }
   </style>
    <title>Thank You</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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
  <?php include('header.php'); ?>
    <div class="container">
      <h1>Thank you for your order</h1>
      <h3>Order number is: 30864321</h3>
      <p>You will receive an email confirmation shortly at youremail@email.com</p>
    <div class="col-md-2">
      <div class='btn-primary'>
        <center><a href="/">Go to Homepage</a></center>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>