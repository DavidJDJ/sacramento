<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sacramento Box Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dashboard/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/dashboard/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/dashboard/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/dashboard/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/dashboard/assets/lineicons/style.css">    
</script>
    <style>
    /* Instagram formatting */
    iframe{
     margin-left: 45px;
     
    }
    #hello{
      display: inline-block;
      font-size: 60px;
      position: absolute;
    }
    #cut_twitter{
      height: 270px;
      overflow: hidden;
    }
    #wrapper{
      width: 90% !important;
      margin-left: 180px;
    }
    #weather_area{
      margin-left: -81px;
    }
    #search_img{
      margin-bottom: 20px;
    }
    
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/dashboard/assets/css/style.css" rel="stylesheet">
    <link href="../assets/dashboard/assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/dashboard/assets/js/chart-master/Chart.js"></script>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- Tracking package -->
<div id="as-root"></div><script>(function(e,t,n){var r,i=e.getElementsByTagName(t)[0];if(e.getElementById(n))return;r=e.createElement(t);r.id=n;r.src="//button.aftership.com/all.js";i.parentNode.insertBefore(r,i)})(document,"script","aftership-jssdk")</script>
<?php include 'navbar.php'; ?>
  <div id="wrapper">
  <section id="container" >
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  	<div class="row mtbox">
                      <h1 id="hello">Howdy, chief!</h1>
                  		<div class="col-md-2 col-sm-2 col-md-offset-9 box0"> 
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<div id="fb_likes"></div>
                  			</div>
					  			<div id="fb_likes2"> </div>
                  		</div>
                  		
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-12 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
<!-- .....................WEATHER WIDGET......................-->						  			
                    <h5>Weather</h5>
                      			</div>
								  <div id="weather_area">
                  <iframe id="forecast_embed" type="text/html" frameborder="0" height="225" width="100%" src="http://forecast.io/embed/#lat=42.3583&lon=-71.0603&name=Sacramento"> </iframe>
                </div>
							</div>
						</div><!-- /col-md-4 -->
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						
            <div class="col-md-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div id="cut_twitter">
                            <a class="twitter-timeline" href="https://twitter.com/TheCityofSac" data-widget-id="624135629136244736">Tweets by @TheCityofSac</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                          </div>
                      		</div>
						</div><!-- /col-md-4 -->
						
						
						<div class="col-md-4 mb">
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                    <h5>Instagram</h5>
                </div>
				
               <!-- www.intagme.com -->
                  <iframe src="http://www.intagme.com/in/?u=dmlzaXRzYWNyYW1lbnRvfHNsfDI3MHwxfDF8fG5vfDV8dW5kZWZpbmVkfG5v" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:400px; height: 200px" ></iframe>
						  </div> 
            </div><!-- /col-md-4 -->
						
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>Track a Package</h5>
								</div>
                <img id="search_img" src="../assets/img/search.png" alt="search img" width=50 height=50>
                <div class="as-track-button" data-size="large" data-responsive="false" data-width="280px"></div>
							</div>
						</div><!-- /col-md-4 -->
						
					</div><!-- /row -->
					
					
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>SUGGESTIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> commented your post.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br/>
                      		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                      		</p>
                      	</div>
                      </div>

                       
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Stay awesome!
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/dashboard/assets/js/jquery.js"></script>
    <script src="../assets/dashboard/assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/dashboard/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/dashboard/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/dashboard/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/dashboard/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/dashboard/assets/js/jquery.sparkline.js"></script>



    <!--common script for all pages-->
    <script src="../assets/dashboard/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../assets/dashboard/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/dashboard/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/dashboard/assets/js/sparkline-chart.js"></script>    
	 <script src="../assets/dashboard/assets/js/zabuto_calendar.js"></script>	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });

           


            $.get('https://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url=%27http://stackoverflow.com/%27&format=json', function(res)
      {
               $('#fb_likes').html('<h3>'+res[0]['like_count']+'</h3>')
               $('#fb_likes2').html('<p>'+res[0]['like_count']+' People liked your page. Whoohoo!</p>')
      },'json')
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

  
  </div>
  </body>
</html>
