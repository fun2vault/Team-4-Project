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
          <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png"></a>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="mr-auto">
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="">Welcome, <?php echo $_SESSION['cust_first_name'];?></a>
              </li>
          </div>
        </div>
      </nav>

      <div id="advert">
        <div class="container">
            <p class="text-center lead"><i class="material-icons" style="color: #a78c22; vertical-align: sub;">info_outline</i> Buy <strong>one</strong> Kennel, get a second Kennel <strong>25% off</strong>!</p>
        </div>
      </div>

      <div class="jumbotron">
        <div class="container" style="color: rgb(119, 101, 27);">
          <h1 class="display-4" style="font-family: 'Ubuntu', sans-serif;">Welcome Home.</h1>
          <p class="hidden-sm-down" style="font-family: 'Ubuntu', sans-serif; font-size: 1.1em; width: 50%;">Our Kennels are the best in the business. From the quality standards we enforce, to the customizability, we ensure your pet will live luxuriously.</p>
        </div>
      </div>

      <div class="container">
        <div class="row spacing">
          <div class="col col-md-3 center-img hidden-sm-down">
            <img src="img/dog.png" >
          </div>
          <div class="col col-md-6">
            <div class="vertical-center">
              <h2 class="display-4" style="font-size: 3em;">New Puppy or Kitten?</h2>
              <h4>Get them a quality, comfortable new home.</h4>
            </div>
          </div>
          <div class="col col-md-3 center-img hidden-sm-down">
            <img src="img/cat.png">
          </div>
        </div>

        <h2 class="display-4" style="margin-bottom: 25px;">Shop Now</h2>

        <div class="card-deck">
          <div class="card">
            <a href="buy_dog.php"><img class="card-img-top" src="img/smalldog.jpg" alt="Standard Dog Kennel"></a>
            <a href="buy_dog.php"><div class="card-body">
              <h4 class="card-title">Standard Dog Kennel</h4>
              <h6 class="card-subtitle mb-2 text-muted">7x7x4</h6>
              <a href="buy_dog.php" class="card-link">$49.99</a>
            </div></a>
          </div>
          <div class="card">
            <a href="buy_dog_large.php"><img class="card-img-top" src="img/largedog.jpg" alt="Large Dog Kennel"></a>
            <a href="buy_dog_large.php"><div class="card-body">
              <h4 class="card-title">Large Dog Kennel</h4>
              <h6 class="card-subtitle mb-2 text-muted">10x10x6</h6>
              <a href="buy_dog_large.php" class="card-link">$79.99</a>

            </div></a>
          </div>
          <div class="card">
            <a href="buy_cat.php"><img class="card-img-top" src="img/smallcat.jpg" alt="Standard Cat Kennel"></a>
            <a href="buy_cat.php"><div class="card-body">
              <h4 class="card-title">Standard Cat Kennel</h4>
              <h6 class="card-subtitle mb-2 text-muted">3x3x3</h6>
              <a href="buy_cat.php" class="card-link">$39.99</a>
            </div></a>
          </div>
          <div class="card">
            <a href="buy_cat_large.php"><img class="card-img-top" src="img/largecat.jpg" alt="Large Cat Kennel"></a>
            <a href="buy_cat_large.php"><div class="card-body">
              <h4 class="card-title">Large Cat Kennel</h4>
              <h6 class="card-subtitle mb-2 text-muted">4x5x3</h6>
              <a href="buy_cat_large.php" class="card-link">$69.99</a>
            </div></a>
          </div>
        </div>

      </div>
    </div>
    <footer class="footer">
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