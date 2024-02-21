<?php
	session_start();
	include 'db_conn.php';

	if (isset($_POST['username']) && isset($_POST['password'])) {
		function validate($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);

			return $data;
		}
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: login.php?error=Username is required");
		exit();
	} else if (empty($password)) {
		header("Location: login.php?error=Password is required");
		exit();
	}

	$sql = "SELECT * FROM users WHERE uname = '$username' AND password = '$password'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['uname'] === $username && $row['password'] === $password) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['uname'];
			$_SESSION['email'] = $row['email'];
			header("Location: index.php");
		}
		else {
			header("Location: login.php?error=An Error Occurred in the Login Process");
		}
	} else {
		header("Location: login.php?error=Incorrect Username or Password");
		exit();
	}

?>