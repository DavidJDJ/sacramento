<?php
function this_page()
      {
          $page='in_the_box';
          return $page;
      }
    //   var_dump($products)
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
    body
    {
      background-color: #C8D2D9;
    }
    .product_image {
        width: 200px;
        height: 200px;
    }
   </style>
    <title>In The Box</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </head>
 <body>
     <?php include('header.php'); ?>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-3 text-center">
                    <img class="product_image" src="../<?= $product['image'] ?>">
                    <p><?= $product['name'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html
