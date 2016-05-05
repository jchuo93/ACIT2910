<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
<title>Welcome the Hotel Application</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
<link href="https://getbootstrap.com/examples/navbar/navbar.css" rel="stylesheet">
<style>
	.logo{
		position: relative;
		background: url("logo.png") center;
	}
	
	#promotions{
		background: url("hotel.png") center;
		color: white;
	}
	
	#localevents{
		background: url("localevents.png") center;
		color: white;
	}
	
	#services{
		background: url("service.jpg") center;
		color: white;
	}
	#footer{
		position: fixed;
		left:0px;
	    bottom:0px;
	    height:30px;
	    width:100%;
	    background:grey;
	}
	#banner{
		background: url("hotel.jpg") center;
	}
</style>
</head>
<body>
	
	<div id="container" >
	  
		<div id="header">
				<!-- Static navbar -->
		  <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button> <!--This is the hamburger button when the menu is collapsed -->
				<a class="navbar-brand" href="prototype.html">Hotel Chain Name</a>
			  </div>
			  <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="prototype.html">Home</a></li>
                  <li><a href="#">Promotions</a></li>
                  <li><a href="#">Local Events</a></li>
                  <li><a href="food.php">Food</a></li>
                  <li><a href="products.php">Services</a></li>
                  <li><a href="cart.php">Cart</a></li>
                  <li><a href="#">Sign In/Sign Up</a></li>
				</ul>

			  </div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		  </nav>
		</div>
		
		<div id="content" class="text-center">
			  <div id="banner" class="col-lg-12 jumbotron"> <!-- flaticon website -->
				<h1>Hotel Chain Name</h1>
				
			  </div>

			<div id="services" class="col-lg-6 jumbotron">
				<h2>Services</h2>

				<p>You can request for room services directly from the browser on any device and from anywhere!</p>
				<a class="btn btn-md btn-success" href="products.php" role="button">Learn More</a>
			</div>

			<div id="services" class="col-lg-6 jumbotron">
				<h2>Food</h2>

				<p>You can request for room food directly from the browser on any device and from anywhere!</p>
				<a class="btn btn-md btn-success" href="food.php" role="button">Learn More</a>
			</div>

			<div id="promotions" class="col-lg-6 jumbotron">	

				<h2>Promotions</h2>
				<p>Insert description here</p>
				<a class="btn btn-md btn-success" href="#" role="button">Learn More</a>

			</div>	
			<div id="localevents" class="col-lg-6 jumbotron">
				<h2>Local Events</h2>

				<p>Insert description here</p>
				<a class="btn btn-md btn-success" href="#" role="button">Learn More</a>
			</div>

			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			
		<div id="footer" >
			<p>This is the footer for our web app. <a href="" class="toTop">Back to top</a><br/></p>
		</div>
		</div>
	</div>
	
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script>
		// http://www.abeautifulsite.net/smoothly-scroll-to-an-element-without-a-jquery-plugin-2/
        // http://stackoverflow.com/questions/6677035/jquery-scroll-to-element
        $(document).ready(function() {

            $(".toTop").click(function(e) {
                e.preventDefault();

                $("html, body").animate({ scrollTop: "0px" }, 400);

            });


        });
	</script>
	<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>