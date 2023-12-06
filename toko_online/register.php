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
				<form action="proses_registrasi.php" method="post">
					<h3>Sign Up</h3>
					<div class="form-holder active">
						<input type="text" placeholder="name" name="nama" class="form-control">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="username" name="username" class="form-control">
					</div>
					<div class="form-holder">
						<input type="radio" name="role" value="admin">
						<label for="admin">Admin</label>
						<input type="radio" name="role" value="pelanggan">
						<label for="pelanggan">Pelanggan</label>
					</div><br>
					<div class="form-holder">
						<input type="password" placeholder="Password" name="password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="form-login">
						<button class="button2 btn-sm col-md-5 m-2">Sign Up</button>
						<p>Already Have account? <a href="#">Login</a></p>
					</div>
				</form>
			</div>
		</div>
<?php include "footer.php";?>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>