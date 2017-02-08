<?php
		
		$server = "localhost";  // same as define funct, but here we are using mysqli_ which is new standard and it is more secure
		$user = "";
		$pass = "";
		$dbname = "test";

$db = mysqli_connect($server, $user, $pass, $dbname); // connect to db, if fails kill function

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>