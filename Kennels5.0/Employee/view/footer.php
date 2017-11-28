      </div>

        <div class="row">
          
        </div>

      </div>
    </div>

   <footer class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col col-md-4">
           
          <div class="col col-md-4">
            <img src="../img/logo.png" style="margin-top: 35px;">
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <!-- Script to keep footer on bottom even if content ends page short -->
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