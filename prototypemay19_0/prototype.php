<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(empty($_SESSION['roomid'])) {
    echo 'incorrect username/ password, please try again.';
}
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	#food{
		background: url("food.jpg") center;
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
                  <li><a href="contactus.html">Contact Us</a></li>
                  <li><a href="#">Sign In</a></li>
				</ul>

			  </div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		  </nav>
		</div>
		
		<div id="content" class="text-center">
			  <div class="jumbotron"> <!-- flaticon website -->
				<h1>Hotel Chain Name</h1>
				
				  <div id="logininfo"></div>
				  <form action="login.php" method="post" class="form-inline col-lg-12">
						  <input type="text" name="roomid" placeholder="Username" />		

						  <input type="password" name="password" placeholder="Password" />	

						  <button id="signin" type="submit" class="btn btn-default">Sign in</button>

				  </form>			  
				<p class="lead">Login or create an account to be able to order food and room services from your room and anywhere outside your room!</p>
				<p>Don't have an account? Call room service (604 961 9848) for acquiring your account info to log in</p>
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

			<div id="services" class="col-lg-6 jumbotron">
				<h2>Services</h2>

				<p>You can request for room services directly from the browser on any device and from anywhere!</p>
				<a class="btn btn-md btn-success" href="products.html" role="button">Learn More</a>
			</div>

			<div id="food" class="col-lg-6 jumbotron">
				<h2>Food</h2>

				<p>You can request for room food directly from the browser on any device and from anywhere!</p>
				<a class="btn btn-md btn-success" href="food.php" role="button">Learn More</a>
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