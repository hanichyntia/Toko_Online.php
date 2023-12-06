<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v4 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="style/logsignstyle.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="produk/register.png" alt="">
				</div>
				<form action="proses_login.php" method="post">
					<h3>Sign In</h3>
					<div class="form-holder">
						<input type="text" placeholder="username" name="username" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Password" name="password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button class="button2 btn-sm m-2 py-2">Sign In</button>
						<p>You don't have any account? <a href="register.php">Sign Up</a></p>
					</div>
				</form>
			</div>
		</div>
<?php include "footer.php";?>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>