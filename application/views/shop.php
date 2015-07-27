<?php function this_page()
      {
          $page='shop';
          return $page;
      }
    //   var_dump($boxes);
    // var_dump($this->session->all_userdata());
?>
<html>
  <head>
    <title>Products</title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Please call pinit.js only once per page -->
    <script type="text/javascript" async defer  data-pin-color="red" data-pin-hover="true"
    src="//assets.pinterest.com/js/pinit.js"></script>
    <style type="text/css">
     body
     {
       background-color: white !important;
     }
     .product_images {
         width: 250px;
         height: 250px;
     }
    </style>
  </head>
  <body>
        <!--Page Preloading-->
    <div id="preloader"><div id="spinner"></div></div>
      <?php include('header.php') ?>
      <div class="container">
             <div class="row">
                 <?php if ($this->session->Flashdata('errors')) {
                    		echo $this->session->Flashdata('errors');
                    	  }
                 ?>
                 <?php foreach ($boxes as $box) { ?>
                     <div class="col-md-4 text-center">
                         <a href="/sacramento/show_box/<?= $box['id'] ?>">
                             <img src="../<?= $box['img'] ?>" class="product_images">

                             <p><?= $box['name'] ?></p>
                         </a>
                     </div>
                 <?php } ?>
             </div>

     </div>
      <?php include('footer.php') ?>
            <script src="../assets/index/js/landing2.js"></script>

 </body>
</html>
