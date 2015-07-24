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
    <link rel="stylesheet" type="text/css" href="../assets/plug_in/suggestion/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plug_in/suggestion/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plug_in/suggestion/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plug_in/suggestion/css/set2.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plug_in/suggestion/css/button.css" />
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/JavaScript">
      $(document).ready(function(){
          $('.submit').click(function(){
             $('button').html('');
             $('button').removeClass('submit');    
             $('button').addClass('loader');
             setTimeout(function() {
                 $('button').removeClass('loader');
                 $('button').addClass('success');
                 $('button').removeClass('submit');
                 $('button').html('<i class="ion-checkmark-round"></i>');
            }, 2000);   
    });
    
});
    </script>
  <!-- Background color correction -->
    <style>
    body{
      background-color: white !important;
    }
    </style>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
        <div id="preloader"><div id="spinner"></div></div>
<?php include('header.php'); 
?>          <form action="/sacramento/add_suggestion" method="post">

     <center> <section class="content bgcolor-1">
        <h2 id="suggestion">Feel like something's missing? Suggest it below to include it in the Sacramento Box!</h2>
        <span class="input input--nao">
          <input class="input__field input__field--nao" type="text" id="name-1" name="name" />
          <label class="input__label input__label--nao" for="input-1">
            <span class="input__label-content input__label-content--nao">Name</span>
          </label>
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span>
        <span class="input input--nao">
          <input class="input__field input__field--nao" type="text" id="suggestion-2" name="suggestion"/>
          <label class="input__label input__label--nao" for="input-2">
            <span class="input__label-content input__label-content--nao">Suggestion</span>
          </label>
          <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
          </svg>
        </span>
          <input type="submit" class="submit"></input>
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
              </form>
  
<?php     include('footer.php') 
?>
    <script src="../assets/plug_in/suggestion/js/classie.js"></script>
    <script>
      (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
              return this.replace(rtrim, '');
            };
          })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
          classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
          if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
          }
        }
      })();
    </script>     
        <script src="../assets/index/js/landing2.js"></script>
  </body>
</html>
