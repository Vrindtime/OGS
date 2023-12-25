<html>
	<head>
		<title>SignUp</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<script src="./script.js" defer></script>

	</head>
	
	<body style="height: 100vh;">
		<div class="container">
			<h2>WELCOME</h2>
			<form method="POST" action="./Signup.php">
				
				<div class="account">
					<div class="acc">
						<div class=img>
							<img src="./userpng.png" width="35px" height="35px" alt="pfp">
						</div>
						<h3>User</h3>
						<input type="radio" name="acc" value="user">
					</div>
				
					<div class="acc">
						<div class=img>
							<img src="./userpng.png" width="35px" height="35px" alt="pfp">
						</div>
						<h3>Admin</h3>
						<input type="radio" name="acc" value="admin">
					</div>
				</div>
				
				<div class=caption>
					<p>Please fill out your form below to get started!</p>
				</div>
				
					<div class="form">
						<label for="name">Name:</label>
							<input type="text" id="name" name="name" placeholder="Enter your Name here" required onChange="validateText(this.value)">
							
						<label for="mail">Email:</label>
							<input type="email" id="mail" name="mail" placeholder="Enter your Email here" required onChange="validateEmail(this.value)">
							
						<label for="pass">Password:</label>
							<input type="password" id="pass" name="pass" placeholder="Enter your Password here" required onChange="validatePassword(this.value)">
							
						<div class="sub">
							<p>Have an Account? <a href=./login.php>Login In</a></p>
					
							<input type="submit" id="submit" value="submit">
						</div>	
					</div>
			
				</div>
			</form>
		</div>	
	</body>
</html>

<?php
	include("./conndb.php");
	//include("./error_handler.php");
	
	if(isset($_REQUEST['mail'])){
	
		$name = $_REQUEST["name"];
		$mail = $_REQUEST["mail"];
		$pass = $_REQUEST["pass"];
		$user = $_REQUEST["acc"];
		$check_query = "Select * from user where mail = '$mail'";
		$check_result = mysql_query($check_query);
		
		if(mysql_num_rows($check_result)>0){
			echo"<script>alert('User already exists');</script>";
		}
		else{
			$sql= "Insert into user values('','$name','$mail','$pass','$user')";
			$result=mysql_query($sql);
			if($result){
				echo"
				<script>
					alert('The User has been Success fully logged in')
					window.location.href='./login.php';		
				</script>
				";
			}
		}
		
	}
?>
