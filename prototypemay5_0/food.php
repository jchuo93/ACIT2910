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
      width: 70%;
      margin: auto;
  }
</style>
</head>
<body>
<div class="container text-center">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <a href="http://www.google.ca"><img src="img_chania.jpg" alt="Chania"></a>
	    </div>

	    <div class="item">
	      <img src="img_chania2.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="img_flower.jpg" alt="Flower">
	    </div>

	    <div class="item">
	      <img src="img_flower2.jpg" alt="Flower">
	    </div>
	  </div>
	</div>
</div>
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