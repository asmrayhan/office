

<?php
require 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 


</head>
<body>
<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Office Management System</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome <br> Not a Member? <a href="signup.html">  Sign Up »</a> </h4>
					</div>
					<div class="login-body">
						<form method="POST" action="action.php">
							<input type="text" class="user" name="username" placeholder="Enter your username">* <?php echo $userErr;?></span>
							<input type="password" name="password" class="lock" placeholder="password">* <?php echo $passErr;?></span>
							<input type="submit" name="submit" value="Sign In">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
				<div class="login-page-bottom">
					<h5> - OR -</h5>
					<div class="social-btn"><a href="#"><i class="fa fa-facebook"></i><i>Sign In with Facebook</i></a></div>
					<div class="social-btn sb-two"><a href="#"><i class="fa fa-twitter"></i><i>Sign In with Twitter</i></a></div>
				</div>
			</div>
		</div>
		
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>