<?php
	$file = fopen("users.txt", "r");
	
	while(! feof($file)){
		echo fgets($file)."<br/>";
	}

fclose($file);

?>