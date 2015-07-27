<?php function this_page()
      {
          $page='suggestions'; 
          return $page;
      }
?> 
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suggestions</title>
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
#nav_options{
  font-family: sans-serif;
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
  font-size: 48px;
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
#description{
  width: 940px;
  text-align: center;
  color: black;
  padding-bottom: 50px;
  font-size: 48px;
  opacity: 0.5;
}

    </style>
  </head>
  <body>
        <div id="preloader"><div id="spinner"></div></div>
<?php include('header.php'); 
?>          
  <div id="contact_form_bg">
  <center><div id="description">Feel like something's missing from the Sacramento Box? </div></center>
      <header>
  <h1>Sharing is Caring</h1>
</header>
<center> <section class="content bgcolor-1">
  <div class="arrow-up"></div>
  <form id="contact" class="form-horizontal" role="form" action="/sacramento/add_suggestion" method="post">
    <div class="form-group">  
      <div class="col-sm-12">
        <input id="name" name="name" type="text" placeholder="NAME" class="form-control">
      </div>
    </div>
    <div class="form-group">  
      <div class="col-sm-12">
        <textarea class="form-control" id="message" name="suggestion" placeholder="WHAT DID WE MISS?"></textarea>
      </div>
    </div>
    <button type="submit" id="send" name="send" class="btn btn-block">send</button>
  </form>
  <?php if(null !== $this->session->flashdata('contact_confirmation'))
            {
      ?>
      <div class="card-panel">
      <span class="bg-success"><?php echo $this->session->flashdata('contact_confirmation') ?></span>
    </div>
      <?php } ?>
      <?php if(null !== $this->session->flashdata('errors'))
            {
      ?>
      <div class="bg-danger">
      <?php echo $this->session->flashdata('errors') ?>
    </div>
      <?php } ?>
</section></center>
  </div>

 
<?php     include('footer.php') 
?>
   
        <script src="../assets/index/js/landing2.js"></script>
  </body>
</html>
