<!DOCTYPE html>
<?php

	$my_top = $_GET['my_top'];
	$my_bottom = $_GET['my_bottom'];
	$my_gate = $_GET['my_gate'];
	$model_id = $_GET['model_id'];
	
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
  <script>
	  function cardNumber() {
		var ccNum = document.getElementById("number").value;
		var cvvNum = document.getElementById("cvv").value;
		
		if(ccNum.length == 16){
			if(cvvNum.length == 3){
				return true;
			}else{
				alert("CVV Length is INVALID");
				return false;
			}
		}else if(ccNum.length == 15){
			if(cvvNum.length == 4){
				return true;
			}else{
				alert("CVV Length is INVALID");
				return false;
			}
		}else{
			alert("Card Length is INVALID");
			return false;
		}
	}  
  </script>
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
			  <li class="nav-item">
                <a class="nav-link" href="logout.php"><button class="btn btn-primary">Logout</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	  
      <div class="container">

        <div class="page-advert">
          <h2><p align="center">Confirm Purchase</p></h2>
        <form action = "add_order.php" onsubmit="return cardNumber()" method="post">
              <div class="form-group row">

                <label for="name" class="col-sm-3 col-form-label">Owner</label>
                <div class="col-sm-9">
                  <input name="owner_name" type="text" class="form-control" required>
                </div>

                <label for="cvv" class="col-sm-3 col-form-label">CVV</label>
                <div class="col-sm-9">
                  <input name="cvv" id = "cvv" type="text" class="form-control"required>
                </div>

                <label for="number" class="col-sm-3 col-form-label">Card Number</label>
                <div class="col-sm-9">
                  <input name="card_number" id = "card_number" type="number" class="form-control"required>
                </div>

                <label for="date" class="col-sm-3 col-form-label">Experation Date</label>
                <div class="col-sm-9">
					<select name = "month">
						<option value="01">January</option>
						<option value="02">February </option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>	
					<select name = "year">
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
					</select>	
                </div>
                </div>
					
				<input type="hidden" name="my_top" id="my_top" value="<?php echo $my_top?>">	
				<input type="hidden" name="my_bottom" id="my_bottom" value="<?php echo $my_bottom?>">	
				<input type="hidden" name="my_gate" id="my_gate" value="<?php echo $my_gate?>">
				<input type="hidden" name="model_id" id="model_id" value="<?php echo $model_id?>">		
				<input type="submit" value="Confirm">
            </form>
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