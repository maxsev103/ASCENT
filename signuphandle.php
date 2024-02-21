<?php
	session_start();
	include 'db_conn.php';

	if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

		function validate($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);

			return $data;
		}

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpass = $_POST['confirmpass'];

		if(empty($username)) {
			header("Location: signup.php?error=Username cannot be empty");
		} else if(empty($email)) {
			header("Location: signup.php?error=Email cannot be empty");
		} else if (empty($password)) {
			header("Location: signup.php?error=Password cannot be empty");
		} else {

			if ($password != $confirmpass) {
				header("Location: signup.php?error=Passwords do not match");
			} else {

				$sql = "INSERT INTO `users` (`uname`, `email`, `password`) VALUES ('$username', '$email', '$password')";

				$query = mysqli_query($conn, $sql);

				if ($query) {
					header("Location: login.php");
				}
				else {
					echo "An error occurred.";
					exit();
				}
			}
		}
	}

?>