<!--For explanations about framework that is used here go to http://www.w3schools.com/w3css/default.asp
I will try to explain most of this code. If you have any questions please contact me on marko.arthofer@yahoo.com.

ALL CODE IS NOT AVAILABLE FOR COPYING, IF YOU NEED PART OF THE CODE (FOR LEARNING PURPOSES ONLY) CONTACT 
AUTHOR OF PAGE ON MAIL STATED ABOVE!!!

IF THERE WILL BE ANY MISSUSE OR PROFIT FROM CODE ON ANY OF YOUR OWN PROJECTS YOU WILL BE REPORTED TO AUTHORITIES!!!

HAVE PLESANT DAY AND ENJOY LEARNIN NEW THINGS :)

MARKO ARTHOFER, 44000 SISAK CROATIA 

 -->

<!-- -->
<?php
include_once 'registration/login.php';
?>
<?php
include_once 'registration/registration.php';
?>


<!-- THIS IS THE HOME PAGE. YOU MUST LOGIN HERE TO ENTER PAGE. It uses php for registration and login..
this 2 commands are including our php to this page (always split your code, it is easier to read it!).

include once -> start php only one per session, they have to be in seperated < ? php ? > tags -->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- enables mobile frendly design-->
<link href="css/w3css.css" rel="stylesheet" type="text/css"> <!-- framework css-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!-- custom font, visit fonts.googleapis.com for more -->
<link href="css/main_before_login.css" rel="stylesheet" type="text/css"> <!-- main css -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> <!-- font awsome, enables icons in forms -->
<!-- enables custom colors from W3.CSS framework -->
<link rel="stylesheet" href="/lib/w3-theme-red.css">

<title>Project Exelion</title> 

</head>

<body>

<div class="w3-row header w3-content" style="max-width:100%;height:130px;"></div> <!-- adds empty space of 130px height -->

 
<div class="w3-container holder w3-row w3-center w3-content" style="width:70%;">
   <?php
	if (isset($_SESSION['message'])) {
		echo "<div class='error_msg' style='height:90px;'><p style='padding:8px;'>".$_SESSION['message']."</div>";  
        unset($_SESSION['message']);
	}

   // this php code is used for error messageing, if you have something in $_SESSION['message'] display it trough the echo function (similiar as printf in c++)
   // more about errors in registration.php file!
	?>
	

	<div class="w3-half">
	<div class=" left" >
    	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="login " class="w3-panel">
			<h2 class="phone h2">LOG IN</h2>
            
        	<label class="w3-label "><i class="fa fa-user w3-xlarge" style="padding-right:6px;"></i>Username</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow" type="text" name="username"  placeholder="Enter username">
            
        	<label class="w3-label"><i class="fa fa-lock w3-xlarge" style="padding-right:6px;"></i>Password</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow " type="password" name="password"  placeholder="Enter password">
            
         	<input class="w3-btn send w3-margin-top w3-white w3-centar w3-hover-blue-grey w3-round-large w3-hover-shadow" type="submit" name="submit_login" value="Login">
            
            <!-- Login form, method="post" means that we will send some code trough this form, all this classes are from W3.CSS framework, similiar as bootstrap, 
            LEARN FRAMEWORKS, it is much more easier than writting your own .css-->

        </form>
            </div>
            </div>
	



<div class="w3-content w3-half left right" >
    	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"  class="w3-panel">
			<h2 class="phone">SIGN UP</h2>
			
			<label class="w3-label "><i class="fa fa-users w3-xlarge" style="padding-right:6px;"></i>Your first and last name:</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow" type="text" name="fullname">

            <label class="w3-label "><i class="fa fa-users w3-xlarge" style="padding-right:6px;"></i>Username</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow" type="text" name="username">
          
            
            <label class="w3-label "><i class="fa fa-envelope-o w3-xlarge" style="padding-right:6px;"></i>Email</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow" type="email" name="email">
            
            
        	<label class="w3-label"><i class="fa fa-lock w3-xlarge" style="padding-right:6px;"></i>Password</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow " type="password" name="password">
            

           	<label class="w3-label"><i class="fa fa-lock w3-xlarge" style="padding-right:6px;"></i>Confirm Password</label>
        	<input class="w3-input w3-border-0 w3-round-large shadow " type="password" name="password2">
            
         	<input class="w3-btn send w3-margin-top w3-white w3-centar w3-hover-blue-grey w3-round-large w3-hover-shadow" type="submit" name="submit_reg" value="Register">
            
		</form>

            </div>
            
            <!-- Registration form, same as login, all of the fields have to be inputed for registration to work, more in registration.php -->

	</div>
         


</body>
</html>
