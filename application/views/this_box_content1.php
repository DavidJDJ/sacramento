<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    iframe{
      width: 550px;
      height: 435px;
      display: inline-block;
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
    <title>Example Title</title>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  $("#trigger").click(function() {
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
  })
})
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->


 </head>
 <body>
    <div class="container">

    <center><iframe src="assets/slider.html" frameBorder="0"></iframe>
    <div id="content">
      <h3>Create a Baltimore Box with an added item from Route One!</h3>
      <p class="lean">from $40.00</p>
      <p>The same GREAT Baltimore Box, now with an added item from Route One Apparel! (FREE SHIPPING to USA and Military APO / FPO addresses)</p>
      <p>Upon clicking "Purchase" below you will be able to select which items you want put inside your Baltimore Box.</p>
      <p>You get to choose 3, 5 or 10 items for your box from our regular list of Baltimore items. Then you get to select 1 additional item from Route One Apparel!</p>


      <!-- Button trigger modal -->
      <button type="button" id="trigger" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Add to Cart
      </button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Choose Products</h4>
            </div>
            <div class="modal-body">

            <form id='choose' action="/placeorders/place_order" method='post'>
              <fieldset style="display:block; width:365px;">
                <legend style="text-align:left;">Pick out of 5</legend>
                <input type='hidden' name='action' value='register'/>
                <br><br>

                <label for='product' ></label>
                <br>
                <input type='checkbox' name='product[]' value="1" />
                product1<br>
                <input type='checkbox' name='product[]' value="2" />
                product2<br>
                <input type='checkbox' name='product[]' value="3" />
                product3<br>
                <input type='checkbox' name='product[]' value="4" />
                product4<br>
                <input type='checkbox' name='product[]' value="5" />
                product5<br><br>

                <input type='hidden' name='box_id' value="<?= $box_id ?>" />

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <form action="/../sacramento/cart">
                    <input type="submit" class="btn btn-primary" value="Check Out" id="Check Out">
                  </form>
                </div>              
              </fieldset>
            </form>  

            </div>
<!--             <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <form action="/../sacramento/cart">
                <input type="submit" class="btn btn-primary" value="Check Out" id="Check Out">
              </form>
            </div> -->
          </div>
        </div>
      </div>

    </div></center>
  </div>
<?php include('footer.php');
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html