<?php 
session_start();
?>

<?php
include 'navigation.php';
include 'helpers.php';


require_once 'connection/conn.php';





if(isset($_POST['submit'])){
$sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
$run=$conn->query($sql);
$result=mysqli_fetch_assoc($run);
if(mysqli_num_rows($run)<1){
  echo "Username and password doesn't match";
}else{
	$userid=$result['id'];
	login($userid);
}
}






	

	?>