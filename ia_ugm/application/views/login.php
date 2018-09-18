<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/login.css") ?>">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
-->
<div class="container">
	<div class="card card-container">
		<img id="profile-img" class="img-responsive center-block" src="<?php echo base_url("assets/logo/logoia.png") ?>" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" method="post">
			<span id="reauth-email" class="reauth-email"></span>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="user_email" required autofocus>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="user_password" required>
			<div id="remember" class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"><a href="timeline.html"></a>Sign in</button>
		</form><!-- /form -->
		<a href="forgot_password.html" class="forgot-password">
			Forgot the password?
		</a>
	</div><!-- /card-container -->
</div><!-- /container -->

</body>
</html>