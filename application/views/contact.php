<?php 
      function this_page()
      {
          $page='contact'; 
          return $page;
      }
?>
<html>
  <head>
    <title>Products</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <!--Google Fonts-->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
      <!--Bootstrap 3.3.2-->
      <link href="../assets/index/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <!--Icon Fonts-->
      <link href="../assets/index/css/font-awesome.min.css" rel="stylesheet" media="screen">
      <link href="../assets/index/css/icon-moon.css" rel="stylesheet" media="screen">
      <!--Animations-->
      <link href="../assets/index/css/animate.css" rel="stylesheet" media="screen">
      <!--Theme Styles-->
      <link href="../assets/index/css/theme-styles.css" rel="stylesheet" media="screen">
    <!--Color Schemes-->
    <link class="color-scheme" href="../assets/index/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
        <script src="../assets/index/js/libs/modernizr.custom.js"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    
    <script>$('document').ready(function() {
      var msg = $('#message');
      msg.autosize();
    });
    </script>
    <style>
    @import url(http://fonts.googleapis.com/css?family=Oswald:400,700,300);
.centered {
  margin: 0 auto;
  text-align: center;
}
.uppercase {
  text-transform: uppercase;
}
.bottom-line {
  border-bottom: 2px solid #c3c3c3;
}
::-webkit-resizer {
  display: none;
}
body {
  background-color: white !important;
  color: #555555;
  font-family: 'Oswald', sans-serif;
  font-weight: 300;

}
body * {
  outline: none !important;
}
#contact_form_bg{
  padding: 40px;
  background-color: #C8D2D9;
  
}
header h1 {
  text-transform: uppercase;
  margin: 0 auto;
  text-align: center;
  border-bottom: 2px solid #c3c3c3;
  background-color: #f7f7f7;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.05);
  color: #555555;
  font-weight: 300;
  width: 300px;
  padding: 10px 0px 10px 0px;
  letter-spacing: 4px;
}
section {
  margin: 0 auto;
  text-align: center;
}
.arrow-up {
  margin: 0 auto;
  text-align: center;
  position: relative;
  top: 1px;
  width: 0;
  height: 0;
  margin-top: 10px;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #f7f7f7;
}
form#contact {
  margin: 0 auto;
  text-align: center;
  border-bottom: 2px solid #c3c3c3;
  width: 300px;
  padding: 20px;
  background-color: #f7f7f7;
  margin-bottom: 20px;
}
.form-control {
  box-shadow: none;
  border-radius: 0;
  background-color: #f7f7f7;
  outline: none;
  border: none;
  box-shadow: none !important;
}
textarea#message {
  min-height: 100px;
  resize: vertical;
  overflow: hidden;
  border-bottom: 0px;
}
button#send {
  text-transform: uppercase;
  border-bottom: 2px solid #c3c3c3;
  margin-top: 20px;
  letter-spacing: 4px;
}

    </style>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id="preloader"><div id="spinner"></div></div>
     
     <div id="contact_form_bg">
      <header>
  <h1>SAY HELLO</h1>
</header>
<section>
  <div class="arrow-up"></div>
  <form id="contact" class="form-horizontal" role="form">
    <div class="form-group">  
      <div class="col-sm-12">
        <input id="name" name="name" type="text" placeholder="NAME" class="form-control">
      </div>
    </div>
    <div class="form-group">  
      <div class="col-sm-12">
        <input id="email" name="email" type="email" placeholder="EMAIL" class="form-control">
      </div>
    </div>
    <div class="form-group">  
      <div class="col-sm-12">
        <textarea class="form-control" id="message" name="message" placeholder="MESSAGE"></textarea>
      </div>
    </div>
    <button id="send" name="send" class="btn btn-block">send</button>
  </form>
</section>
  </div>
  <!--Libraries and Plugins-->
         <script src="../assets/index/js/libs/jquery-1.11.2.min.js"></script>
        <script src="../assets/index/js/libs/jquery.easing.1.3.js"></script>
        <script src="../assets/index/js/plugins/bootstrap.min.js"></script>
        <script src="../assets/index/js/plugins/jquery.touchSwipe.min.js"></script>
        <script src="../assets/index/js/plugins/jquery.placeholder.js"></script>
    <script src="../assets/index/js/plugins/icheck.min.js"></script>
    <script src="../assets/index/js/plugins/jquery.validate.min.js"></script>
        <script src="../assets/index/js/plugins/gallery.js"></script>
    <script src="../assets/index/js/plugins/jquery.fitvids.js"></script>
        <script src="../assets/index/js/plugins/jquery.bxslider.min.js"></script>
        <script src="../assets/index/js/plugins/waypoints.min.js"></script>
    <script src="../assets/index/js/plugins/smoothscroll.js"></script>
        <script src="../assets/index/js/landing2.js"></script>
      <?php include 'footer.php' ?>
    </body>
</html>
