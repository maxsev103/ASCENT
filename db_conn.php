<?php
		$sname = "localhost";
		$uname = "root";
		$password = "";

		$db_name = "ascent-data";

		$conn = mysqli_connect($sname, $uname, $password, $db_name);

		if(!$conn) {
			echo "Connection Failed.";
			die("ERROR: Could Not Connect." . mysqli_connect_error());
		}
?>