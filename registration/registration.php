<?php 

	if (isset($_POST['submit_reg'])) {  // if button for registratin is pressed (name="submit_reg")
		
		$username     = $_POST['username'];   //add input field named username (name="username") -> Index.notlogin.php 
		$email        = $_POST['email']; 	  // same as before
		$password     = $_POST['password'];
		$password2    = $_POST['password2'];
		$fullname     = $_POST['fullname'];

		$avuser     = "SELECT username FROM users WHERE username = '$username'"; //select username from table users if username already exists
		$resultuser = mysqli_query($db, $avuser);                                // then save it in var resultuser. This is used for checking if username is taken

		$avmail     = "SELECT email FROM users WHERE email = '$email'";      // same as before just now for checking email
		$resultmail = mysqli_query($db, $avmail);


		$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';   // regex function, used to make password contain at least 1 capital, 1 number and 1 small letter. 
																	   // it must be at least 8 digits long. BETTER PASSWORD PROTECTION FOR USER

		if(preg_match("/[<>?!@#$&()]/",$username) || preg_match("/[<>?!#$&()]/", $email) || preg_match("/[<>?!#$&@()]/",$password)  ||  preg_match("/[<>?!#$&@()]/",$password2) ||  preg_match("/[<>?!#$@()]/",$fullname)){  

			  	$_SESSION['message'] = "You tried to be an idiot and implement script into my DB :) Go and die. "; //regex function for stoping XSS, if there is spec char, kill session
			  	session_destroy();

		}elseif (mysqli_num_rows($resultuser) != 0) {  //check if row number is different from 0, if it is it means that there is already var username with that username

			$_SESSION['message'] = "Username already exists, please select another one!";

		}elseif (mysqli_num_rows($resultmail) != 0) {  // same as before

			$_SESSION['message'] = "Email is already in use, please select another one!";

		}elseif(preg_match($regex, $password)) { //check if password is valid ($regex)
		
			if ($password == $password2) { // if 2 password are the same proceed with registration
				
				$password = md5($password); //hash password before storing for security purposes
				$sql = "INSERT INTO users(username,email,password,fullname) VALUES('$username','$email','$password','$fullname')"; //insert values in db
				mysqli_query($db, $sql); // save query

				$_SESSION['message'] = "You are now registrated";

				}else{

				$_SESSION['message'] = "The two passwords do not match";
				
				}	
		}else{
			$_SESSION['message'] = "Password must be a minimum of 8 characters and contain at least one capital letter, one small letter and at least one number";
		}



		

	}
?>


