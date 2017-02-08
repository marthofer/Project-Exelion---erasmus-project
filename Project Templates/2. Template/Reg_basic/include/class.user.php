<?php
include "db_config.php";

	class User{
	
	public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if(mysqli_connect_errno()){
		echo "Error: Could not connect to database.";
		exit;
	}
}

	/*** for registratrion proces ***/
	public function reg_user($name,$username,$password,$email){
		$password=md5($password);
		$sql="SELECT * FROM users where uname='$username' or uemail='$email'";
		
		//checking if the username or email is avaible in db
		$check = mysqli_query($this->db,$sql);
		$count_row = mysqli_num_rows($check);
		
		//if the username is not in db then insert to the table
		if ( $count_row == 0){
				$sql1="INSERT into users set uname='$username' , upass='$password' , fullname='$name' , uemail='$email' ";
				$result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
				return $result;
			}
				else{return false;}
			
		}
		
		public function check_login($emailusername,$password){
			//check if the username is available in the table
			$password=md5($password);
			$sql2="SELECT * FROM users where (uname='$emailusername' or uemail='$emailusername') and upass='$password'";
			
			$result = mysqli_query($this->db,$sql2);
			$user_data = mysqli_fetch_array($result);
			//$count_row = $result->num_rows;
			$count_row = mysqli_num_rows($result);
			echo "$user_data[uname]";
			if ($count_row == 1) {
				//this login var will use for the session thing
				$_SESSION['login']=true;
				$_SESSION['uid']=$user_data['uid'];
				return true;
			}
			else{
				return false;
			}
		}
	
		/*** for showing the username or fullname ***/
		public function get_fullname($uid){
			$sql3="SELECT fullname FROM users WHERE uid = $uid";
			$result = mysqli_query($this->db,$sql3);
			$user_data = mysqli_fetch_array($result);
			echo $user_data['fullname'];
		}
		
		/*** starting the session ***/
		public function get_session(){
			return $_SESSION['login'];
		}
		
		public function user_logout() {
			$_SESSION['login']=false;
			session_destroy();
		}
	}
	
?>		
				
		
	
