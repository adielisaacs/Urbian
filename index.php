
<?php

session_name('LoginForm');
@session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Urbian - Talking Toilet </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<form id="login-form" class="login-form" name="form1" method="post" action="thankyou.php">

<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Talking Toilet</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
	         <div class="form-group"> 
	         <label for="comment">Method of Choice ?</label>
	          <div class="radio">
	  				<input type="radio" name="optradio" value="Fold">Fold
			  </div>
			  <div class="radio">
	  				<input type="radio" name="optradio" value="Crumple">Crumple
			  </div>
			</div>
            <div class="form-group">
              <label for="comment">What are you thinking of ?</label>
              <textarea class="form-control" rows="5" name="thinking" id="comment"></textarea>
            </div>
            <div class="form-group">
              <input name="submit" type="submit" value="Submit" class="btn btn-primary btn-lg btn-block"/>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          
		  </div>	
      </div>
  </div>
  </div>
</div>
</form>
		<script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>