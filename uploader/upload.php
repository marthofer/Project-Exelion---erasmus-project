<?php
$target_dir = "uploaded_pictures/"; //directory for uploaded pics, path is relative to upload.php

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //put file to dir
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION); // info aboout pics
//Check if image is fake or not

if(isset($_POST["submit_image"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "<span style='color:white;'>File is an image - " . $check["mime"] . ".\n </span>"; 
		// $check["mime"] => check exstension (JPG, PNG...)
          $uploadOk = 1;
    } else {
        echo "File is not an image.\n";
        $uploadOk = 0;
    }

}
	// check if targeted file already exists
if(file_exists($target_file)){
		echo "<span style='color:white;'>Sorry, file already exists.\n</span>";
		$uploadOk = 0;
	}
	// check if image is bigger than 1 mb
if($_FILES["fileToUpload"]["size"] > 1000000){
	echo "<span style='color:white;'>Sorry, your file is too large!\n</span>";
	$uploadOk = 0;
	}
	// check image file type
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpeg" ){
	echo "<span style='color:white;'>Sorry, only JPG, JPEG, GIF and PNG formats are allowed! \n</span>";
	$uploadOk = 0;
	}
	
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<span style='color:white;'>Sorry, your file was not uploaded.\n</span>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // if all is ok move file to targerdir
        echo "<span style='color:white;'>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</span>";
		//header('location: ../Index_login.php');
    } else {
        echo "<span style='color:white;'>Sorry, there was an error uploading your file.\n</span>";
    }	


}
?>