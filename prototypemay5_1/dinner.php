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
                  <li><a href="prototype.html">Home</a></li>
                  <li><a href="#">Promotions</a></li>
                  <li><a href="#">Local Events</a></li>
                  <li  class="active"><a href="food.php">Food</a></li>
                  <li><a href="products.php">Services</a></li>
                  <li><a href="#">Sign In/Sign Up</a></li>
                </ul>

              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
          </nav>
        </div>
        
        <br/><br/><br/><br/><br/>

        <div id="content" class="col-lg-12">

            <?php
            //replace with ajax in the future
            require_once('DBConnector.php');

                    $db = DBConnector::getInstance();
                    $rows = $db->query("SELECT listing_id, name, image, price, description FROM dinner");

                    $html = "";
                    if(!$rows || count($rows) == 0) {
                        $html = "<tr><td>There are no results.</td></tr>";
                    } else {

                        foreach($rows as $row) {
                            $sku = $row['listing_id']; 
                            $name = $row['name'];
                            $image = $row['image'];
                            $price = $row['price'];
                            $desc = $row['description'];
                            $html .= "<div class='alert alert-info text-left col-lg-4'>
                                        <form class='form'>
                                            <img src='$image' alt='$image'>
                                            <h3>$name</h3>
                                            <p>$desc</p>
                                            <button type='submit' class='btn btn-default'>Add to cart</button>


                                            <input id='ui-spinner-button' data-price='$price' type='number' value='1' min='1' max='10'/>
                                            <span data-price='$price' id='price'>$price</span>

                                        </form>
                                      </div>";

                                      // (navbar tabs? required some specific js for it)
                        }

                    }

                    echo $html;
            ?>

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
    <script>
        /*<![CDATA[*/
        $(document).ready(function() {


            $('#ui-spinner-button').click(function() {
               //console.log($(this).val());
               var number = parseInt($(this).val());
               var price = parseFloat($(this).attr("data-price").replace("$", ""));
               console.log(number, price);
               $("#price").html("$" + number * price);
            });

        });
        /*]]>*/
    </script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>


