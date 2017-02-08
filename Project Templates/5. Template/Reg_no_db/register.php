<?php

if (isset ($_POST['submit'])){
	$problem = FALSE;
	
	
}

if (empty($_POST['username'])){
	$problem=TRUE;
	echo "Please enter your username!\n";
	
	
}

if (empty($_POST['password'])){
	$problem=TRUE;
	echo "Please enter your password!\n";
	
	
}
if (empty($_POST['password2'])){
	$problem=TRUE;
	echo "Entered passwords do not match. Please try again.\n";
	
}

if (!$problem){
	if($fp = fopen ('users.txt', 'ab')){
		$dir = time() . rand(90,4596);
		$data = $_POST['username']. "\t" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "\t".$dir."\r\n";
		
		fwrite($fp,$data);
		fclose($fp);
		mkdir($dir);

		echo "Registration successful";
		header("location:../index.php");
	}
		else{
			echo "You colud not be registrated due to an  unknown error\n";
				header("location:../index.php");
		}
}
		
		else{
			echo "Please try again\n";
				header("location:../index.php");
			
		}
		

	
	

?>



