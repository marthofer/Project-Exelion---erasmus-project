<?php
session_start();
include_once 'include/class.user.php';
$user = new User(); $uid = $_SESSION['uid'];
if(!$user->get_session()){
header("location:login.php");
}

if(isset($_GET['q'])){
$user->user_logout();
header("location:../site/index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=ISO-8859-1/>
<title>Home</title>
<style>
*{
	margin:0px;
	padding:0px;}
.header{
	width:100%;
	height:150px;
	background-color:white
	}
body{
	background-color:#d8544b;
font-family:Arial,Helvetica,sans-serif;
}
h1{font-family:'Georgia',Times New Roman, Times, serif;
}
</style>
</head>
<body>
<div class="header"></div>
<div id="container" style="margin-top:200px;">
<div id="header"><a href="home.php?q=logout">LOGOUT</a></div>
<div id="main-body">
<h1>Hello <?php $user->get_fullname($uid); ?></h1>
</div>
<div id="footer"></div>
</div>
</body>
</html>