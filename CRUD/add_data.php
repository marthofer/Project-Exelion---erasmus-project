<?php
session_start();
include_once '../registration/db_config.php';

if (isset($_POST['submit_save'])) {  //compltely the same code as in registration.php
		
		$username     = $_POST['username'];   
		$email        = $_POST['email']; 	  
		$password     = $_POST['password'];
		$fullname     = $_POST['fullname'];

		$avuser     = "SELECT username FROM users WHERE username = '$username'"; 
		$resultuser = mysqli_query($db, $avuser);                                

		$avmail     = "SELECT email FROM users WHERE email = '$email'";      
		$resultmail = mysqli_query($db, $avmail);


		$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';   

		if(preg_match("/[<>?!@#$&()]/",$username) || preg_match("/[<>?!#$&()]/", $email) || preg_match("/[<>?!#$&@()]/",$password)  ||  preg_match("/[<>?!#$@()]/",$fullname)){  

			  	$_SESSION['message'] = "You tried to be an idiot and implement script into my DB :) Go and die. "; 
			  	session_destroy();

		}elseif (mysqli_num_rows($resultuser) != 0) {  

			$_SESSION['message'] = "Username already exists, please select another one!";

		}elseif (mysqli_num_rows($resultmail) != 0) {  

			$_SESSION['message'] = "Email is already in use, please select another one!";

		}elseif(preg_match($regex, $password)) { 
			
				$password = md5($password); //hash password before storing for security purposes
				$sql = "INSERT INTO users(username,email,password,fullname) VALUES('$username','$email','$password','$fullname')"; //insert values in db
				mysqli_query($db, $sql); // save query

				$_SESSION['message'] = "User implementation successful ";
				
					
		}elseif(!preg_match($regex, $password)){
			$_SESSION['message'] = "Password must be a minimum of 8 characters and contain at least one capital letter, one small letter and at least one number";
		}else{
			$_SESSION['message'] = "";
			}
		}

?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- enables mobile frendly design-->
<link href="../css/w3css.css" rel="stylesheet" type="text/css"> <!-- framework css-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!-- custom font, visit fonts.googleapis.com for more -->
<link href="../css/CRUD.css" rel="stylesheet" type="text/css"> <!-- main css -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> <!-- font awsome, enables icons in forms -->
<link rel="stylesheet" href="/lib/w3-theme-red.css">

<title>Project Exelion</title> 

</head>

<body>

  <div class="w3-row nav w3-brown" style="width:100%;padding-top:25px; ">
  	  <h2>CRUD options for Project Exelion - ADD DATA</h2>
      <p class="w3-centar name w3-xlarge w3-padding-16">Hello <?php echo $_SESSION['username'];  ?> - ADMIN</p> <!-- displays users username on page -->    
      <ul class="w3-navbar w3-border-0 w3-center ">
         <a class="w3-ripple w3-brown w3-btn-block w3-padding-12 w3-hover-grey" href="CRUD.php">RETURN TO ADMIN PAGE</a> 
      </ul>
   </div>
   
   <?php
	if (isset($_SESSION['message'])) {
		echo "<div class='error_msg'><p style='padding:8px;'>".$_SESSION['message']."</div>";  
        unset($_SESSION['message']);
	}

	?>
   
   <table class="w3-table w3-content w3-round-xlarge ">
   		<form method="post">
         	<tr>
        		<td><label class="w3-label ">Name/Surname:</label><br/>
        		<input class="w3-input w3-border-0 w3-round-large shadow" type="text" name="fullname"></td>
            </tr>

			<tr>
            	<td><label class="w3-label ">Username</label><br/>
        		<input class="w3-input w3-border-0 w3-round-large shadow" type="text" name="username"></td>
            </tr>
          
            <tr>
            	<td><label class="w3-label "></i>Email</label><br/>
        		<input class="w3-input w3-border-0 w3-round-large shadow" type="email" name="email"></td>
            </tr>
            
            <tr>
        		<td><label class="w3-label">Password</label><br/>
        		<input class="w3-input w3-border-0 w3-round-large shadow " type="password" name="password"></td>
            </tr>
           
            <tr>
    			<td><input class="w3-btn send w3-margin-top w3-white w3-centar w3-hover-blue-grey w3-round-large w3-hover-shadow" type="submit" 
                	name="submit_save" value="Save"></td>
    		</tr>
        
        </form>   
   </table>
   
   
   
  
            



</body>
</html>