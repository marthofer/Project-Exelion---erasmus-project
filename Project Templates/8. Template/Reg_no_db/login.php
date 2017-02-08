<?php
if(isset($_POST['submit'])){
	$loggedin = TRUE;
	$fp = fopen('users.txt', 'r');
	
	while ($line= fgets($fp,100)){
		if (($line[0]==$_POST['username']) AND ($line[1]==  password_hash($_POST['password'], PASSWORD_DEFAULT) )) {
			$loggedin = TRUE;
			break;
			
		}
		
	}
	if ($loggedin){
		print "Login succcessful!";
		header("location:../index.html");
	}else{
		print "Username and Password don't match! Please try again.";
			header("location:login.html");
	}

	
}




?>