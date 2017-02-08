<?php
session_start();
	include_once 'include/class.user.php';
	$user= new User();
	
	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
		$login = $user->check_login($emailusername, $password);
		if ($login) {
			// login succes
			header("location:../index.html");
			}else {
			// login failed
			echo 'Wrong username or password';
			}
			
	}
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>OOP LOGIN MODULE</title>
	<style>

	#container{
		padding:25px;
		width:400px; 
		margin: 0 auto;
	}
	</style>
	</head>
	<body>
<span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size:13px; font-style: normal; line-height: 1.5;">
    
<div id="container">
<h1>Login here</h1>
<form action="" method="post" name="login">
<table>
<tbody>
<tr>
<th>UserName or Email:</th>
<td><input type="text" name="emailusername" required="" /></td>
</tr>
<tr>
<th>Password:</th>
<td><input type="text" name="password" required="" /></td>
</tr>
<tr>
<td></td>
<td><input onclick="return(submitlogin());" type="submit" name="submit" value="Login" /> </td>
</tr>
<tr>
<td></td>
<td><a href="registration.php">Register new user</a></td?
</tr>
</tbody>
</table>
</form></div>
</span>
	
	<script type="text/javascript" languages="javascript">
			function _submitlogin() {
				var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username.");
					return false;
				} else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}
			}
			
	</script>
	</body>
	</html>
