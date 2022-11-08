
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body class="img js-fullheight" style="background-image: url(images/wallpaper.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Corona laundry</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Login dulu!</h3>
						<form class="signin-form" action="login/cek_login.php" method="post">
							<div class="form-group" >
								<input type="text" name="username" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input name="password" name="password"id="password-fi" type="password" class="form-control" placeholder="Password"
									required>
							</div>
							<div class="form-group">
								<input type="submit" class="form-control btn btn-primary submit px-3" value="sign in">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>