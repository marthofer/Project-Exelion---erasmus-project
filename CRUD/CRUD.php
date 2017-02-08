<?php
session_start();
include_once '../registration/db_config.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE id=".$_GET['delete_id'];
 mysqli_query($db, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition


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
  	  <h2>CRUD options for Project Exelion</h2>
      <p class="w3-centar name w3-xlarge w3-padding-16">Hello <?php echo $_SESSION['username'];  ?> - ADMIN</p> <!-- displays users username on page -->    
      <ul class="w3-navbar w3-border-0 w3-center ">
         <a class="w3-ripple w3-brown w3-btn-block w3-padding-12 w3-hover-grey" href="../Index_login.php">RETURN TO MAIN PAGE</a> 
      </ul>
      <ul class="w3-navbar w3-border-0 w3-center ">
         <a class="w3-ripple w3-brown w3-btn-block w3-padding-12 w3-hover-grey" href="add_data.php">ADD DATA HERE!</a> 
      </ul>
   </div>
   
     <div style="padding-top:150px;"></div>
   <?php
	if (isset($_SESSION['message'])) {
		echo "<div class='error_msg'><p style='padding:8px;'>".$_SESSION['message']."</div>";  
        unset($_SESSION['message']);
	}

	?>

   <div style="overflow-x:auto;">
   <table class="w3-table w3-content w3-large w3-round-xlarge" style="color:#FFFFFF;width:80%;">
   		
   		<tr>
        	<th>Name/Surname</th>
    		<th>Username</th>
            <th>Email</th>
    		<th>Password</th>
    		<th colspan="2">Operations</th>
    	</tr> 
        <?php
		$sql_query = "SELECT * FROM users";
		$result_set = mysqli_query($db, $sql_query);
		while ($row= mysqli_fetch_row($result_set)){
		?>
        <tr>
        	<td><?php echo $row[4]; ?></td>
        	<td><?php echo $row[1]; ?></td>
        	<td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><i class="fa fa-eraser" aria-hidden="true"></i></a></td>
        </tr>
        <?php
		 }
 		?>
   </table>
   
</div>
          
        
     

      
   
   
   
  
            


<script type="text/javascript" src="../JS/CRUD.js"></script>
</body>
</html>