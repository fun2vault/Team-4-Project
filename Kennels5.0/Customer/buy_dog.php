<!DOCTYPE html>
<?php
	session_start();
			
	$_SESSION['cust_id'];
	$_SESSION['cust_first_name'];
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,500" rel="stylesheet">
  </head>
  <body>

    <div class="wrapper">
      <nav class="navbar navbar-toggleable-sm header">
        <div class="container">
          <i class="navbar-toggler navbar-toggler-right material-icons" style="color: #fbf3ff;" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">menu</i>
          <a class="navbar-brand" href="index_user.php"><img class="logo" src="img/logo.png"></a>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="mr-auto">
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="">Welcome, <?php echo $_SESSION['cust_first_name'];?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="advert">
        <div class="container">
            <p class="text-center lead"><i class="material-icons" style="color: #a78c22; vertical-align: sub;">info_outline</i> Buy <strong>one</strong> Kennel, get a second Kennel <strong>25% off</strong>!</p>
        </div>
      </div>

      <div class="container" style="margin-bottom: 50px;">
		<br>
        <h2 class="shop-title">
            Standard Dog Kennel
          </h2>
        <div class="row">
          <div class="col-md-5">
            <div class="shop-image">
              <img src="img/smalldog.jpg"">
            </div>
          </div>
          <div class="col-md-7">
            <h4>List Price: $49.99</h4>
            <h5>Customize Your Kennel</h5>
            <h6>1. Top:</h6>
            <a href="#"><button type="button" class="btn btn-kennels">None</button></a>
            <a href="#"><button type="button" class="btn btn-outline-kennels">Top Name</button></a>
            <h6>2. Bottom:</h6>
            <a href="#"><button type="button" class="btn btn-kennels">None</button></a>
            <a href="#"><button type="button" class="btn btn-outline-kennels">Bottom Name</button></a>
            <h6>3. Gates:</h6>
            <a href="#"><button type="button" class="btn btn-kennels">One</button></a>
            <a href="#"><button type="button" class="btn btn-outline-kennels">Two</button></a>
            <a href="#"><button type="button" class="btn btn-outline-kennels">All Sides are Gates even Top and Bottom</button></a>
            <div class="spacer"></div>
            <h6>4. You're all set!</h6>
            <a href="#"><button type="button" class="btn btn-kennels">Purchase Now</button></a>
          </div>
        </div>
        <div class="spacer"></div>
        <h4>Product Features</h4>
        <div class="features">
          <p><span style="font-weight: bold;">Size</span><br>7' x 7' x 4'</p>
          <p><span style="font-weight: bold;">Included</span><br>5 Frame Posts, 8 Top & Bottom Rails, 8 Bottom Plate Ties, 8 Top Cover Ties, 16.5' of Fencing, 12 Chain clips, 2 Gate Hinges, 2 Tension Bars, 8  Tension Bands with Bolts, Instructions</p>
          <p><span style="font-weight: bold;">Quality Components</span><br>All the components included with our Kennels are true quality and will list a lifetime.</p>
          <p><span style="font-weight: bold;">Light Weight</span><br>Our Kennels are surprisingly light weight. You won't have trouble moving the Kennel if you ever need to.</p>
          <p><span style="font-weight: bold;">High Tech</span><br>Each and every Kennel has built-in Wifi using state of the art telephone line technology. We utilize the excess power that falls from the telephone lines to run our patended Kennel-fi system. This allows the cat to browse their Catbook and Instameow profiles to ensure they're not out of the loop even while locked up away from their pals.</p>
          <p><span style="font-weight: bold;">Secure</span><br>Gate is equipped with slide bolt latch technology for dependable and unmatched security. "No, kitty! This is my pot pie!" No more worrying about your pot pie. Your kitty will be locked up for good.</p>
        </div>
      </div>
    </div>

    <footer class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col col-md-4">
            <h4>Customer Service</h4>
            <ul>
              <li><a href="#">Shipping Info</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Help</a></li>
              <li>(931) 257-4846</li>
            </ul>
          </div>
          <div class="col col-md-4">
            <h4>Corporate</h4>
            <ul>
              <li><a href="#">Careers</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Code of Ethics</a></li>
              <li><a href="#">Affiliate Program</a></li>
            </ul>
          </div>
          <div class="col col-md-4">
            <img src="img/logo.png" style="margin-top: 35px;">
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <!-- Script to keep footer on bottom -->
    <script>
      var div = $('.wrapper').height() + 186;
      var docHeight = $(window).height();
      var docWidth = $(window).outerWidth();


      if (div < docHeight & docWidth > 768) {

        $('.wrapper').css({'min-height':'100%'});

        $(document).ready(function(){
            $(window).resize(function(){
                var footerHeight = $('.footer').outerHeight();
                var stickFooterPush = $('.push').height(footerHeight);
          
                $('.wrapper').css({'marginBottom':'-' + footerHeight + 'px'});
              });
          
              $(window).resize();
            });
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>