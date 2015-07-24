<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// var_dump($box);
// var_dump($products);
function this_page()
      {
          $page='shop';
          return $page;
      }
$location=this_page();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buy</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style type="text/css">
            body
            {
              background-color: #C8D2D9;
            }
            #product_img{
              width: 550px;
              height: 435px;
              display: inline-block;
              margin-bottom: 70px;
            }
            #content{
              width: 550px;
              height: 435px;
              display: inline-block;
              text-align: justify;
              vertical-align: top;
              margin-top: 50px;
              margin-left: 30px;
            }
        </style>
        <script>
        $(document).ready(function() {
          $("#trigger").click(function() {
            $('#myModal').on('shown.bs.modal', function () {
              $('#myInput').focus();
            })
          })
        })
        </script>
    </head>
 <body>
     <?php
     $location=this_page();
      ?>
     <style type="text/css">
      body
      {
         margin-top: 0px !important;
        background-color: #C8D2D9;
      }
      #nav
      {
       background-color: #232F3E;
       z-index: 0;
      }
      .img_header{
        margin-left: 40px;
      }
      .p_header{
        z-index: 1;
        color: white;
        padding: 15px;
        display: inline-block;
        font-size: 28px;
        margin-right: 20px;
      }
      #cart{
        text-decoration: none;
        color: white;
        margin-right: 80px;
      }
      .nav{
        display: inline-block;
      }
      .white_href_header{
        color: white !important;
        font-size: 18px !important;
      }
      #nav_options{
        padding-right: 112px;
        padding-top: 26px;
      }
     /*..................menu_drop_down...............*/

      ul.dropdown-cart{
      min-width:250px;
     }
     ul.dropdown-cart li .item{
      display:block;
      padding:3px 10px;
      margin: 3px 0;
     }
     ul.dropdown-cart li .item:hover{
      background-color:#f3f3f3;
     }
     ul.dropdown-cart li .item:after{
      visibility: hidden;
      display: block;
      font-size: 0;
      content: " ";
      clear: both;
      height: 0;
     }
     .dropdown-menu
     {
     min-width: 221px !important;
     }

     ul.dropdown-cart li .item-left{
      float:left;
     }
     ul.dropdown-cart li .item-left .img_header,
     ul.dropdown-cart li .item-left span.item-info{
      float:left;
     }
     ul.dropdown-cart li .item-left span.item-info{
      margin-left:10px;
     }
     ul.dropdown-cart li .item-left span.item-info span{
      display:block;
     }
     ul.dropdown-cart li .item-right{
      float:right;
     }
     ul.dropdown-cart li .item-right button{
      margin-top:14px;
     }
     #view_cart{
     color: black !important;
     }
     #id {
      color: white;
     }
     .navbar-default .navbar-nav>li>a {
      color: white !important;
     }
     .p_header {
         margin-right: 0px;
     }
     .errors {
         color: red;
     }
        </style>
      <nav id="nav" class="navbar navbar-default">
      <img src="../../assets/img/company_logo.png" width=100 height=100 class="img_header">
      <p class="p_header">Sacramento In A Box</p>
      <ul id="nav_options" class="nav nav-pills pull-right">
     <?php $index='';$faq='';$suggestions='';$shop='';$in_the_box='';$contact='';$cart='';
           switch ($location)
           {
             case 'index':
             $index="id='nav_list' class='active'";
             break;
             case 'faq':
             $faq="id='nav_list' class='active'";
             break;
             case 'shop':
             $shop= "id='nav_list' class='active'";
             break;
             case 'suggestions':
             $suggestions="id='nav_list' class='active'";
             break;
             case 'in_the_box':
             $in_the_box="id='nav_list' class='active'";
             break;
             case 'contact':
             $contact="id='nav_list' class='active'";
             break;
             $cart="id='nav_list' class='active'";
             break;
           }


      ?>
        <li <?= $index;?>>
          <a href="/" class="white_href_header">Home</a>
        </li>
        <li <?= $faq ?>><a href="../faq" class="white_href_header">FAQ</a></li>
        <li <?= $shop ?>><a href="../shop" class="white_href_header">Shop</a></li>
        <li <?= $suggestions ?>><a href="../suggestions" class="white_href_header">Suggestions</a></li>
        <li <?= $in_the_box ?>><a href="../in_the_box" class="white_href_header">What's in the box?</a></li>
        <li <?= $contact ?>><a href="../contact" class="white_href_header">Contact Us</a></li>
        <li <?= $cart ?>><a href='../cart' class="white_href_header">Cart</a></li>
        </ul>
      </ul>
      </nav>
    <div class="container">
        <div class="row">
            <div class=" col-md-6">
                <img src='../../<?= $box[0]['img'] ?>' id='product_img'>
            </div>
            <div class="col-md-6">
                <div class="errors">
                <?php if ($this->session->flashdata('errors')) {
                    echo $this->session->flashdata('errors');
                } ?>
                </div>
              <h3><?= $box[0]['name'] ?></h3>
              <p class="lean">Price: $<?= $box[0]['price'] ?></p>
              <p><?= $box[0]['description'] ?></p>
              <!-- Button trigger modal -->
              <button type="button" id="trigger" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Buy</button>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Choose Products</h4>
                    </div>
                    <div class="modal-body">
                        <form id='choose' action="../add_cart" method='post'>
                          <input type="hidden" name="box" value="<?= $box[0]['name'] ?>">
                          <input type="hidden" name="item_amount" value="<?= $box[0]['item_amount'] ?>">
                          <input type="hidden" name="box_price" value="<?= $box[0]['price'] ?>">
                          <fieldset style="display:block; width:365px;">
                                <legend style="text-align:left;">Pick out of <?= $box[0]['item_amount'] ?></legend>
                                <p><?= $box[0]['description'] ?></p>
                                <label for='product'>Products</label>
                                    <?php foreach ($products as $product) { ?>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="<?= $product['name'] ?>" value="<?= $product['id'] ?>" <?php if($box[0]['id'] == $product['box']) { ?>checked<?php } ?>>
                                            <?= $product['name'] ?>
                                          </label>
                                        </div>
                                    <?php } ?>
                          </fieldset>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value="Check Out" id="Check Out">
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>
</body>
</html
