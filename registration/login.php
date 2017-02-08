<?php 
  include_once 'db_config.php';

	if (isset($_POST['submit_login'])) { // if login button is pressed 

		$username = $_POST['username']; //add input field named username (name="username") -> Index.notlogin.php 
		$password = $_POST['password']; // same 
		
		$password = md5($password); //hash password
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; // select from db user that has pass and username same as one that is trying to login
		$result = mysqli_query($db, $sql);

		if( preg_match("/[<>?!#$@&()]/", $username) || preg_match("/[<>?!#@$&()]/",$password) ){ //for stopping xss
			  	$_SESSION['message'] = "You tried to be an idiot and implemet script into my DB :) Go and die. ";
			  	session_destroy();
		}else{
		if (mysqli_num_rows($result)==1) { //if query passed and it found user with that pass and username proceed
			session_start();
			$_SESSION['login']=true;
			$_SESSION['username'] = $username;
			header("location: Index_login.php "); //go to new page
		}else{
			$_SESSION['message']= "Username or password is incorrect";

		}
	}
}
?> 

