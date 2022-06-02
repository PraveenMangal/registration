<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

	<div class="container">

		<div class="row mt-4">
			<div class="col-4">
			</div>

			<div class="col-8">
				<h1 class="text-center">Enter your details or Sign Up</h1>
			</div>
		</div>

		<?php

			if (!empty($_SESSION['success_msg'])) {
			?>

		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong><?php echo $_SESSION['success_msg'];?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

		<?php
			unset($_SESSION['success_msg']);
			}
			
			if (!empty($_SESSION['error_msg'])) {
			?>

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Error!</strong><?php echo $_SESSION['error_msg'];?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

		<?php
			unset($_SESSION['error_msg']);
			}
			?>

		<form action="/registration/action/check_user.php" method="post">

			<div class="row mt-4">
				<div class="col-6 text-center">
					<label for="email" class="form-label">Email:</label>
				</div>

				<div class="col-6 text-center">
					<input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required>
				</div>
			</div>

			<div class="row mt-2">
				<div class="col-6 text-center">
					<label for="password" class="form-label">Password:</label>
				</div>

				<div class="col-6 text-center">
					<input type="password" class="form-control" name="password" id="password" required>
				</div>
			</div>

			<div class="row mt-2 justify-content-center">
				<div class="col-2">
					<a href="/registration/registration.php" class="btn btn-success">Sign Up</a>
					</div>
					
					<div class="col-2">
					<input type="submit" class="btn btn-primary" name="submit" value="Sign In">
				</div>
			</div>

		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>

</body>

</html>