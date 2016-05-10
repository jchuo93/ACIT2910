<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
<title>Welcome the Hotel Application</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
<link href="https://getbootstrap.com/examples/navbar/navbar.css" rel="stylesheet">
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }

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
</style>
</head>
<body>

<div class="container">

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
				  <li><a href="prototype.html">Home</a></li>
                  <li><a href="#">Promotions</a></li>
                  <li><a href="#">Local Events</a></li>
                  <li class="active"><a href="food.php">Food</a></li>
                  <li><a href="products.php">Services</a></li>
                  <li><a href="#">Sign In/Sign Up</a></li>
				</ul>

			  </div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		  </nav>
		</div>
<br/>
<div id="content" class="text-center">

	<div id="breakfast" class="carousel slide col-lg-12" data-ride="carousel">
	<h2>Breakfast</h2>
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#breakfast" data-slide-to="0" class="active"></li>
	    <li data-target="#breakfast" data-slide-to="1"></li>
	    <li data-target="#breakfast" data-slide-to="2"></li>
	    <li data-target="#breakfast" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="breakfast1.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="breakfast2.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="breakfast3.jpg" alt="Flower">
	    </div>

	    <div class="item">
	      <img src="breakfast4.jpg" alt="Flower">
	    </div>
	  </div>
	  
</div>
<a href="breakfast.php" class="btn btn-info" role="button">Menu List</a>

<div id="lunch" class="carousel slide col-lg-12" data-ride="carousel">
<h2>Lunch</h2>
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#lunch" data-slide-to="0" class="active"></li>
	    <li data-target="#lunch" data-slide-to="1"></li>
	    <li data-target="#lunch" data-slide-to="2"></li>
	    <li data-target="#lunch" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="lunch1.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="lunch2.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="lunch3.jpg" alt="Flower">
	    </div>

	    <div class="item">
	      <img src="lunch4.jpg" alt="Flower">
	    </div>
	  </div>


</div>
<a href="lunch.php" class="btn btn-info" role="button">Menu List</a>

<div id="dinner" class="carousel slide col-lg-12" data-ride="carousel">
<h2>Dinner</h2>
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#dinner" data-slide-to="0" class="active"></li>
	    <li data-target="#dinner" data-slide-to="1"></li>
	    <li data-target="#dinner" data-slide-to="2"></li>
	    <li data-target="#dinner" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="dinner1.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="dinner2.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="dinner3.jpg" alt="Flower">
	    </div>

	    <div class="item">
	      <img src="dinner4.jpg" alt="Flower">
	    </div>
	  </div>


</div>
<a href="dinner.php" class="btn btn-info" role="button">Menu List</a>



</div><br/>
			<div id="footer" class="text-center" >
			<p>This is the footer for our web app. <a href="" class="toTop">Back to top</a><br/></p>
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