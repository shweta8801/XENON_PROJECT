<?php
include 'database_conection/config.php';
if (isset($_POST['Login'])) {  ///// if submit button pressed.

	$username = $_POST['username_input'];
	$password = $_POST['password_input'];

	$md5_password = md5($password);  ///// this is encrypted password for database.
	$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `user_status`='1'";
	$run_query = mysqli_query($config, $sql);
	$result_count = mysqli_num_rows($run_query);

	if ($result_count == 1) {
		$result = mysqli_fetch_assoc($run_query);
		session_start();
		$_SESSION['userid_session'] = $result['id'];
		$_SESSION['username_session'] = $result['username'];
		header("location:welcome.php");
	} else {
		$failed = "Invalid Username Or Password";
	}
}

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Sell Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="inc/css/app.css" rel="stylesheet">

</head>

<body style="background-image: url('images/bike.jpg');background-size:cover">
	<div>
		<div class="container ">
			<fieldset>

			
				<form action="" class="login_form" method="post">
				
					<div class="text-center">
						<img src="images/bike1.jpg" alt="" class="login_logo  img-fluid" />
					</div>

					<div class="row ">
						<div class="col-lg-3"></div>
						<div class="mb-3 col-md-6 ">
							<label for="exampleFormControlInput1" class="form-label">Username</label>
							<input type="text" required class="form-control" id="exampleFormControlInput1" name="username_input" placeholder="Username" />
						</div>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="mb-3  col-md-6 ">
							<label for="exampleFormControlTextarea1" class="form-label">Password</label>
							<input type="password" required class="form-control" id="exampleFormControlInput1" name="password_input" placeholder="Password" />
						</div>
					</div>

					<div class="text-center">
						<button type="submit" name="Login" class="btn btn-primary">Login</button>
						<a href="register.php" class="btn btn-xs btn-primary">Register</a>
					</div>

				</form>
			</fieldset>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>