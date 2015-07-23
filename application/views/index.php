<?php function this_page()
      {
          $page='index';
          return $page;
      }
?>
<!--Conditionals for IE9 Support-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <title>Sacramento in a Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap 3.3.2-->
    <link href="assets/index/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--Icon Fonts-->
    <link href="assets/index/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="assets/index/css/icon-moon.css" rel="stylesheet" media="screen">
    <!--Animations-->
    <link href="assets/index/css/animate.css" rel="stylesheet" media="screen">
    <!--Theme Styles-->
    <link href="assets/index/css/theme-styles.css" rel="stylesheet" media="screen">
    <!--Color Schemes-->
    <link class="color-scheme" href="assets/index/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
		<script src="assets/index/js/libs/modernizr.custom.js"></script>

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
        .navbar {
            margin-bottom: 0px;
            border-radius: 0px;
            border: none;
        }
           </style>
         <nav id="nav" class="navbar navbar-default">
         <img src="../assets/img/company_logo.png" width=100 height=100 class="img_header">
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
           <li <?= $faq ?>><a href="sacramento/faq" class="white_href_header">FAQ</a></li>
           <li <?= $shop ?>><a href="sacramento/shop" class="white_href_header">Shop</a></li>
           <li <?= $suggestions ?>><a href="sacramento/suggestions" class="white_href_header">Suggestions</a></li>
           <li <?= $in_the_box ?>><a href="sacramento/in_the_box" class="white_href_header">What's in the box?</a></li>
           <li <?= $contact ?>><a href="sacramento/contact" class="white_href_header">Contact Us</a></li>
           <li <?= $cart ?>><a href='sacramento/cart' class="white_href_header">Cart</a></li>
           </ul>
         </ul>
         </nav>  	<!--Page Preloading-->
    <div id="preloader"><div id="spinner"></div></div>

    <!--Hero Unit with Slider-->
    <section class="hero">
    	<div class="container">

        <!--Hero Slider-->
        <div class="row">
          <div class="hero-slider">
            <div class="slide">
              <div class="col-lg-4 col-md-4 col-sm-4 animated fadeInDown">
                <h2 style="margin-top:70px;" class="text-light text-left">Send the gift of Sacramento, in a Box!</h2>
                <p>Great Present For Any Ocassion</p>
                <p>Create, Customize and Order Your Box</p>
                <a class="btn btn-primary" href="sacramento/shop">Shop All Products</a>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 animated fadeInRight">
              	<div class="video">
                  <img src="assets/index/img/hero-slider/macbook.png" width="782" height="422" alt=""/>
                  <div class="vide-holder">
                    <iframe src="https://player.vimeo.com/video/90509954?byline=0&amp;portrait=0&amp;color=ffeeac" width="720" height="405"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--Close Hero Slider-->
      </div>
    </section><!--Close Hero-->


    <!--Gallery-->
    <section class="page-block" id="gallery">
    	<div class="container">
        <div class="row page-header">
          <h2>Our customers love the Sacramento Box</h2>
          <span>Choose a unique gift for a Sacramento lover</span>
        </div>
        <div class="row">
          <ul class="gallery">
            <li>
                <img src="assets/index/img/gallery/1.jpg" alt="thumb01"/>
            </li>
            <li>
                <img src="assets/index/img/gallery/2.jpg" alt="thumb02"/>
            </li>
            <li>
                <img src="assets/index/img/gallery/3.jpg" alt="thumb03"/>
            </li>
            <li>
                <img src="assets/index/img/gallery/4.jpg" alt="thumb04"/>
              </a>
            </li>
            <li>
                <img src="assets/index/img/gallery/5.jpg" alt="thumb05"/>
            </li>
            <li>
                <img src="assets/index/img/gallery/6.jpg" alt="thumb06"/>
            </li>
            <li>
                <img src="assets/index/img/gallery/7.jpg" alt="thumb07"/>
            </li>
            <li>
                <img src="assets/index/img/gallery/8.jpg" alt="thumb08"/>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--Testimonials-->
    <section class="page-block color" id="testimonials">
    	<div class="container">
        <div class="row page-header">
          <h2 class="text-light">Testimonials</h2>
        </div>
        <div class="row">
          <div id="testimonials-slider" class="testimonials-slider carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#testimonials-slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonials-slider" data-slide-to="1"></li>
              <li data-target="#testimonials-slider" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <img class="img-circle img-center" src="assets/index/img/testimonials/1.jpg" width="192" height="192" alt="Dexter Dirk"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="text-light">Brad Pitt</footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <img class="img-circle img-center" src="assets/index/img/testimonials/2.jpg" width="192" height="192" alt="Richard Roe"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="text-light">Ellen Pao</footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <img class="img-circle img-center" src="assets/index/img/testimonials/3.jpg" width="192" height="192" alt="Jonathan Doe"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="text-light">Lieslie Nielson</footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!--Libraries and Plugins-->
    <script src="assets/index/js/libs/jquery-1.11.2.min.js"></script>
		<script src="assets/index/js/libs/jquery.easing.1.3.js"></script>
		<script src="assets/index/js/plugins/bootstrap.min.js"></script>
		<script src="assets/index/js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="assets/index/js/plugins/jquery.placeholder.js"></script>
    <script src="assets/index/js/plugins/icheck.min.js"></script>
    <script src="assets/index/js/plugins/jquery.validate.min.js"></script>
		<script src="assets/index/js/plugins/gallery.js"></script>
    <script src="assets/index/js/plugins/jquery.fitvids.js"></script>
		<script src="assets/index/js/plugins/jquery.bxslider.min.js"></script>
		<script src="assets/index/js/plugins/waypoints.min.js"></script>
    <script src="assets/index/js/plugins/smoothscroll.js"></script>
		<script src="assets/index/js/landing2.js"></script>

        <style type="text/css">
         .fb-like {
           vertical-align: top;
           margin-left: 20px;
         }
         .footer
         {
           padding: 8px;
            border-top: 1px solid silver;
            padding-bottom: 14px;
            height: 75px; /* .push must be the same height as .footer */
         }
         .social_media_footer{
           text-align: center;
           padding-right: 55px;
           padding-bottom: 15px;

         }
         #footer_text {
             color: #333;
         }
         .image_social_footer {
             display: inline-block;
         }
        </style>
      <div class="footer">
       <center><i>Made with &lt;3 in Sacramento</i></center>
       <div class="row">
       <div class="social_media_footer">
       <a href="http://www.facebook.com/sacramentobox"><img src="../assets/img/facebook.png" alt="facebook_pic" height=40px width=40px class="image_social_footer"></a>
       <a href="http://www.twitter.com/sacramentobox"><img src="../assets/img/twitter.png" alt="twitter_pic" height=40px width=40px class="image_social_footer"></a>
       <a href="http://www.Instagram.com/sacramento_box"><img src="../assets/img/instagram.png" alt="instagram_pic" height=40px width=40px class="image_social_footer"></a>
       </div></div></div>
  </body>
</html>
