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
				<h1 class="text-center">Welcome</h1>
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

		
	</div>

</body>

</html>