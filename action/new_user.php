<?php
require_once "/xampp/htdocs/registration/db_connect.php";

if (isset($_POST['submit']) and $_POST['submit'] == 'Register') {

	// Check duplicate email
	$sql = "SELECT 1 FROM `user_detail` WHERE `email` = '" . $_POST['email'] . "' ";
	$result = mysqli_query($conn, $sql);

	if (!$result) {
		$_SESSION['error_msg'] = "Please contact system admin => " . mysqli_error($conn);
		header('Location: http://localhost/registration');
		exit();
	}
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['success_msg'] = "Email is already registered";
		header('Location: http://localhost/registration');
		exit();
	}

	$sql = "INSERT INTO `user_detail`(`name`, `email`, `password`, `picture`) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_FILES['picture']['name'] . "')";

	$result = mysqli_query($conn, $sql);

	if (!$result) {
		$_SESSION['error_msg'] = "Please contact system admin => " . mysqli_error($conn);
	} else {
		$_SESSION['success_msg'] = "Successfully Registered. Please Login to continue";
	}
	header('Location: http://localhost/registration');
	exit();
}


// mysqli_close($conn);
