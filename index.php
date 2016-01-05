<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <div class="jumbotron">
      <div class="col-sm-3 col-md-3 col-xs-12 col-lg-3 pull-left"><img src="img/logo.png"></div>
      <div class="col-sm-7 col-md-8 col-xs-12 col-lg-9 pull-right">
        <nav class="navbar navbar-inverse navbar-static-top" style="margin-top: 40px;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             <!--  <a class="navbar-brand" href="#">Project name</a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Our Policies</a></li>
                  </ul>
                </li>
                <li><a href="#contact">Our USP</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Workforce Solutions</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Blue Collar Services</a></li>
                    <li><a href="#">Contract Staffing</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cleaning Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Guest House Management</a></li>
                    <li><a href="#">Educational Institutes</a></li>
                    <li><a href="#">Healthcare Institutes</a></li>
                    <li><a href="#">Retail Chains</a></li>
                    <li><a href="#">Banks &amp; Offices</a></li>
                  </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div><!-- nav ends -->
    </div><!-- jumbotron ends -->
  </div><!-- container ends -->

  <div class="container">
    <!-- <div class="jumbotron"> -->
      <div id = "myCarousel" class = "carousel slide col-md-12 col-sm-12 col-xs-12">
                   <!-- Carousel indicators -->
                   <ol class = "carousel-indicators">
                      <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
                      <li data-target = "#myCarousel" data-slide-to = "1"></li>
                      <li data-target = "#myCarousel" data-slide-to = "2"></li>
                   </ol>   
                   
                   <!-- Carousel items -->
                   <div class = "carousel-inner">
                      <div class = "item active"><!-- slide 1 -->
                         <img src="img/main2.jpg">
                      </div>
                      
                      <div class = "item"><!-- slide 2 -->
                         <img src="img/banner1.jpg">
                      </div>
                      
                      <div class = "item"><!-- slide 3 -->
                         <img src="img/banner2.jpg">
                      </div> 
                   </div>
                   
                   <!-- Carousel nav -->
                   <a class = "carousel-control left fa fa-chevron-left" href = "#myCarousel" data-slide = "prev"></a>
                   <a class = "carousel-control right fa fa-chevron-right" href = "#myCarousel" data-slide = "next"></a>
                    
      </div><!-- Carousel ends -->
      <div class="clearfix"></div>
      <div class="center-block" style="padding-top:30px; margin-bottom:20px;"><h3 style="text-align: -webkit-center;">"We can provide manpower services for multi-enterprise, multi-channel and multi-locations."</h3></div>
      <section>
      	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<div style="background-color:#eee; padding-left:5px; padding-right:5px; text-align:-webkit-center;"><p>demo text</p></div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<div style="background-color:#eee; padding-left:5px; padding-right:5px; text-align:-webkit-center;"><p>demo text</p></div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<div style="background-color:#eee; padding-left:5px; padding-right:5px; text-align:-webkit-center;"><p>demo text</p></div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        	<div style="background-color:#eee; padding-left:5px; padding-right:5px; text-align:-webkit-center;"><p>demo text</p></div>
        </div>
      </section>          
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
