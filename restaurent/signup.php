<?php
require_once 'connection/conn.php';
include 'navigation.php';
?>
<br><br><br>

 




 <h1 class="text-center">Food Crunch</h1>
     <h2 class="text-center">Universal access to explore the food</h2><hr>

     
     <div id="loginform">
	<h1 class="text-danger">Create a free account:</h1>
 <form action="signup.php" method="post">
	 <div class="form-group">
   		<label for="firstname">Firstname:</label>
	 	   <input type="text" class="form-control" id="firstname" name="firstname" />
	 	</div>
	 
	 <div class="form-group">
	 	<label for="lastname">Lastname</label>
	    <input type="text" name="lastname" class="form-control" id="lastname">
	</div>

	 <div class="form-group">
	 	<label for="email">Email</label>
	    <input type="email" name="email" class="form-control" id="email">
	</div>

	 <div class="form-group">
	 	<label for="password">Password</label>
	    <input type="password" name="password" class="form-control" id="password">
	</div>

	 <div class="form-group">
	 	<label for="gender">Gender:</label><br>
         <input type="radio" name="gender" id="gender" value="Male">Male
	 	 <input type="radio" name="gender" id="gender" value="Female">Female
	</div>

	 <div class="form-group">
	 	<label for="birthday">Birthday</label>
	    <input type="date" name="birthday" class="form-control" id="birthday">
	</div>

	<button type="submit" class="btn btn-default btn-success btn-lg text-right">Sign Up</button>



</form>
</div>

<style>
	#loginform{
	width:40%;
	height: 60%;
	border:2px solid #000;
	border-radius:15px;
	background-color: silver;
	box-shadow: : 7px 7px 15px rgba(0,0,0,0.6);
	margin: 2% auto;
    padding: 15px;
}

#succesbtn{
	font-size: 20px;
	font-family: Georgia;
}
</style>

<?php


$firstname=(isset($_POST['firstname'])?$_POST['firstname']:'');
$lastname=(isset($_POST['lastname'])?$_POST['lastname']:'');
$email=(isset($_POST['email'])?$_POST['email']:'');
$password=(isset($_POST['password'])?$_POST['password']:'');
$gender=(isset($_POST['gender'])?$_POST['gender']:'');
$birthday=(isset($_POST['birthday'])?$_POST['birthday']:'');

if(isset($_POST)){
	$signup="INSERT INTO login(firstname,lastname,email,password,gender,birthday) VALUES('$firstname','$lastname','$email','$password','$gender','$birthday')";
	$signuprun=$conn->query($signup);
}
	?>

	<div id="succesbtn">
   <div class="text-center text-danger text-capitalize">
	<?php if($signuprun){
	 echo $_SESSION['success_flash']='Your account has been created';}?>
	</div>
</div>

<?php include 'footer.php';?>





	






