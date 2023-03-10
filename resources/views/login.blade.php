

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets-login/images/icons/logo2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets-login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets-login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets-login/images/bg-login.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
			<a  style="opacity: 0.5; font-size: 20px; text-align: right;" a href="/">Return</a>
			<!--<a href="/"> -->
				<span class="login100-form-title p-b-41">
				User Login
				@error('email')
					<div class="alert alert-danger" role="alert">
					{{ $message }}
				  </div>
				@enderror
				@error('password')
					<div class="alert alert-danger" role="alert">
					{{ $message }}
				  </div>
				@enderror
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="Password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
						<div class="container-login50-form-btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets-login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets-login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets-login/js/main.js"></script>

</body>
</html>
