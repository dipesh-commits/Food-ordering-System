<?php 
$conn= mysqli_connect('localhost','root','','restaurent');
if(!$conn){
	echo "Database error occured:".mysqli_connect_error();
	die();
}

 ?>
