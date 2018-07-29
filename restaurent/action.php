<?php
session_start();



require_once 'connection/conn.php';

$email=(isset($_POST['username'])?$_POST['username']:'');
$password=(isset($_POST['password'])?$_POST['password']:'');

if(isset($_POST['username'])){
	$query= "SELECT * FROM login WHERE email='$email' AND password='$password'";
	$result=$conn->query($query);

	
	if(mysqli_num_rows($result)>0){
		$fetch=mysqli_fetch_assoc($result);
		$_SESSION['username']=$fetch['firstname'];
		echo 'Yes';
	}else{
		echo 'NO';
	}
}

if (isset($_POST['action'])) {
	unset($_SESSION['username']);
}

?>