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

        </div>
      </nav>

      <div id="advert">
        <div class="container">
            <p class="text-center lead"><i class="material-icons" style="color: #a78c22; vertical-align: sub;">info_outline</i> Buy <strong>one</strong> Kennel, get a second Kennel <strong>25% off</strong>!</p>
        </div>
      </div>

      <div class="container">

        <div class="page-advert">
          <h2>Welcome Home.</h2>
          <p>Our Kennels are the best in the business. From the quality standards we enforce, to the customizability, we ensure your pet will live luxuriously.</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <h3 class="text-center">Returning Customers Sign In</h3>
            <form method = "post" action = "customer_login.php" style="padding: 20px;">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="login_password" placeholder="Password">
              </div>
				<input type="submit" value="Submit">
            </form>
          </div>
          <div class="col-md-6 border-line">
            <h3 class="text-center">New Customer Sign Up</h3>
            <div class="text-center" style="padding: 20px; margin-top: 30px;">
              <p>New to Kennels R Us? Join us to order online and track shipments.</p>
              <a href="register.php"><button class="btn btn-primary">Create an Account</button></a>
            </div>
          </div>
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