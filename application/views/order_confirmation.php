<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function this_page()
      {
          $page='cart';
          return $page;
      }
// var_dump($user_products);
// var_dump($products);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
    img {
        height: 50px;
        width: 50px;
    }
    .product_text {
        margin-bottom: 30px;
    }
   </style>
 </head>
 <body>
  <?php include('header.php'); ?>
    <div class="container">
      <h1>Thank you for your order</h1>
      <table class="table">
          <caption>Your order:</caption>
          <thead>
              <tr>
                  <th>box</th>
                  <th>image</th>
                  <th>product</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($this->session->userdata('cart') as $cart => $value) { ?>
                  <tr>
                      <td><p><?= $value['box'] ?></p></td>
                      <td>
                      <table>
                          <?php $user_product = array_values($value);
                                for ($i=3; $i < count($user_product)-1; $i++) {
                                    foreach ($products as $product) {
                                        if ($product['id'] == $user_product[$i]) { ?>
                                            <tr>
                                            <td>
                                                <img src="../<?= $product['image'] ?>">
                                            </td>
                                             </tr>
                                        <?php }
                                    }
                                } ?>
                  </table>
              </td>
                      <td><?php $keys = array_keys($value);
                      for($i = 3; $i < count($keys)-1; $i++) {
                        ?><p class="product_text"><?= str_replace('_', ' ',$keys[$i]) ?></p>
                      <?php } ?>
                      </td>
                  </tr>
              <?php } ?>
          </tbody>
      </table>
    <div class="col-md-2">
      <div class='btn-primary'>
        <center><a href="/">Go to Homepage</a></center>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
</body>
</html>
