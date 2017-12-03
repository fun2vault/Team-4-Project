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

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="mr-auto">
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Signup</a>
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

      <div class="container">

        <div class="page-advert">
          <h2>Welcome Home.</h2>
          <p>Our Kennels are the best in the business. From the quality standards we enforce, to the customizability, we ensure your pet will live luxuriously.</p>
        </div>

        <div class="row">
          <div class="col-md-8 offset-md-2">
            <h3>Create an Account</h3>
            <form method="post" action = "add_customer.php"><!--temp-->
              <div class="form-group row">

                <label for="firstName" class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input name="first_name" type="text" class="form-control" placeholder="Ryan"required>
                </div>

                <label for="lastName" class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input name="last_name" type="text" class="form-control" placeholder="Rodriguez" required>
                </div>

                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input name="password" type="password" class="form-control" placeholder="Metroid8" required>
                </div>

                <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-9">
                  <input name="phone_number" type="text" class="form-control" placeholder="931-257-4846" required>
                </div>

                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input name="email" type="email" class="form-control" placeholder="ragenplay@gmail.com" required>
                </div>

                <label for="street" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <input name ="street" type="text" class="form-control" placeholder="1199 Viewmont Drive" required>
                </div>

                <label for="city" class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-9">
                  <input name="city" type="text" class="form-control" placeholder="Clarksville" required>
                </div>

                <label for="state" class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
					<select name = "state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>	
                </div>
                <label for="zip" class="col-sm-3 col-form-label">Zip</label>
                <div class="col-sm-9">
                  <input name="zip" type="number" class="form-control" placeholder="37040" required>
                </div>

                <!--<div class="col-sm-12">
                  <input type="checkbox" name="sendEmail" value="sendEmail" checked="checked">
                  Yes, I would like to receive updates and special offers, including reward notices and other information from Kennels R Us.
                </div>-->

                </div>
				<input type="submit" value="Submit">
            </form>
			<br>
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