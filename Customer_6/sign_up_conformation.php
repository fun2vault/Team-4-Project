<!DOCTYPE html>
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
          <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png"></a>
      </nav>

      <div class="container">

        <div class="page-advert">
          <h2>Thank You for Signing Up</h2>
          <p>Please Click Continue to Login In.</p>
        </div>
		<form action="login.php">
			<input type="submit" value="Continue" />
		</form>

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