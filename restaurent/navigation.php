<?php
include 'head.php';

session_start();
require_once 'connection/conn.php';


?>


<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php" id="title">FOOD CRUNCH</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Drinks<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="softdrinks.php">Soft Drink</a></li>
					<li><a href="harddrinks.php">Hard Drink</a></li>
				</ul>

			</li>

             <li class="dropdown">
             	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Foods<span class="caret"></span></a>
             	<ul class="dropdown-menu">
             		<li><a href="vegfoods.php">Veg Foods</a></li>
             		<li><a href="nonvegfoods.php">Non-veg Foods</a></li>
             	</ul>
             </li>
			
			<li><a href="orders.php">Orders</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php" id="signup_button"><span class="glyphicon glyphicon-user"></span><b>Sign Up</b></a></li>
			
				<?php
					if(isset($_SESSION['username']))
					{
						?>
						<li><h4 class="text-primary">Welcome <?php echo $_SESSION['username'];?>!!!</h4></li>
						<li><button type="button"  id="logout" class="btn btn-danger">Logout</a><li>
						<script>
							$(document).ready(function(){
							$('#login, #signup_button').remove();
							
						});
						</script>
							<?php 

					}else{
						?>
						<!-- <button type="button" class="btn btn-default btn-success btn-lg" id="myBtn">Login</button>-->
						 <?php
					}
				?>
		
				  <!-- Trigger the modal with a button -->
				  <button type="button" class="btn btn-default btn-success btn-lg" id="login" data-toggle="modal" data-target="#loginModal">Login</button>

				  <!-- Modal -->
				  <div id="loginModal" class="modal fade" role="dialog">
					  	<div class="modal-dialog">
					  		<div class="modal-header">
					  			<button type="button" class="close" data-dismiss="modal">&times;</button>
					  			 <h3 class="modal-title">Login</h3>

					  		</div>
					  		<div class="form-group">
					  		<div class="modal-body">
					  		
					  			<label for="username">Username</label>
					  			<input type="text" name="username" id="username" class="form-control"><br>
					  			<label for="password">Password</label>
					  			<input type="password" name="password" id="password" class="form-control"><br>
					  			<button type="button" name="login_button" id="login_button" class="btn btn-success"><span class="glyphicon glyphicon-off"></span>Login</button>
					  			<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
					  		</div>
					  	</div>
					  	</div>
				  </div>


				
               
           
			
		</ul>
	</div>
</nav>


<style>
  .modal-header, h3, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  body.modal-open div.modal-backdrop { 
    z-index: 0; 
}
  </style>

<script>
$(document).ready(function(){
  	$('#login_button').click(function(){
		var username=$('#username').val();
		var password=$('#password').val();
		if(username!='' && password!='')
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{username:username, password:password},
				success:function(data){
					if(data=='NO'){
						alert("Username and password doesn't match");
					}else{
						$('#loginModal').hide();
						location.reload();
					}
				}
			});
		}
		else{
			alert('All fields are compulsary to include');
		}
	});
	

	$('#logout').click(function(){
		var action="logout";
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function(){
				location.reload();
			}
		});
	});
});
</script>


