<html>
	<head>
		<title>LoginPage</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body  style="height: 100vh">
		<div class=container>
			<h2>WELCOME BACK</h2>
			<form action="./login.php" method="POST">
			
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
					<label for="mail">Email:</label>
					<input type="email" id="mail" name="mail" placeholder="Enter your Email here" required>
					<label for="pass">Password:</label>
					<input type="password" id="pass" name="pass" placeholder="Enter your Password here" required>
					
					<div class="sub">
						<p>No Account? <a href=./Signup.php>SignUp</a></p>
					
						<input type="submit" id="submit" value="submit">
					</div>	
				</div>
		</div>
		</form>
	</body>
</html>

<?php
	include("./conndb.php");
	//include("./error_handler.php");
	session_start();
	if(isset($_REQUEST['mail'])){
	
		$email=$_REQUEST["mail"];
		$pass=$_REQUEST["pass"];
		$role=$_REQUEST["acc"];
		
		$email_flag = 0;
		$pass_flag = 0;
		$role_flag = 0;
		
		$sql= "SELECT * FROM user";
		$result=mysql_query($sql);
		
		while($search=mysql_fetch_array($result))
		{
		
			if($email == $search['mail']){
				$email_flag = 1;
				if($pass==$search['pass']){
					$pass_flag = 1;
					if($role==$search['role']){
						$role_flag = 1;
						$name = $search['name'];
						$nameid = $search['user_id'];
						$_SESSION['alert']="Welcome Back $name";
						$_SESSION['user']= $nameid;
						break;
					}
					else{
						$user_flag = 0;
					}
				}
				else{
					$pass_flag = 0;
				}
			}
			else{
				$email_flag = 0;
			}	
		}
			if($email_flag == 1){
				if( $pass_flag == 1){
					if($role_flag == 1){
						if($role == "admin"){
							header("Location:./admin/Status.php");
						}
						else{
							header("Location:./status.php");
						}
					}
					else
					{echo"<script>alert('User Does Not match with Email');</script>";}
				}
				else
				{echo"<script>alert('Password Does Not match with Email');</script>";}
			}
			else
			{
				echo"<script>alert('Email Not Found');</script>";
			}	
	}
?>
