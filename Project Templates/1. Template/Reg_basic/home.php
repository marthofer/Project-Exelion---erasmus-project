<?php
session_start();
include_once 'include/class.user.php';
$user = new User(); $uid = $_SESSION['uid'];
if(!$user->get_session()){
header("location:login.php");
}

if(isset($_GET['q'])){
$user->user_logout();
header("location:../template_one/index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=ISO-8859-1/>
<title>Home</title>
<style>
	body{
	background-image:url(../template_one/assets/img/bg.jpg);
	background-size:cover;}
	#container{
		padding:60px;
		width:400px; 
		margin: 0 auto;
		background-color: rgba(103,103,103,0.3);
		border-radius:20%;
	}
</style>
</head>
<body>
<div id="container">
<div id="header"><a href="home.php?q=logout">LOGOUT</a></div>
<div id="main-body">
<h1>Hello <?php $user->get_fullname($uid); ?></h1>
</div>
<div id="footer"></div>
</div>
</body>
</html>