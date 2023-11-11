<!--Add Ticket Page-->
<html>
	<head>
		<title>Add Ticket</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			body{
				flex-direction: column;
			}
			.container{
				width:80vw;
				height: 80vh;
			}
			.container > h2{
				flex-direction: row;
				text-align: start;
				justify-content: center;
				padding:1% 5%;
			}

			.content > h2{
				text-align: start;
				margin-top: 0px;
				margin-bottom: 3%;
			}
			.left{
				height: 50vh;
			}
			.right{
				height: 50vh;
				padding: 8%;
			}
			form{
				display: flex;
				padding:  0% 5%;
			}
			input[type="submit"]{
				border-radius: 10px;
				border: none;
				background-color: #521378;
				color: white;
				width: 80px;
				height: 40px;
			}
			.submit{
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 15%;
			}
			input,textarea{
				border-radius: 5px;
				border: none;
				padding: 2%;
			}
		</style>
	</head>
	<body>
	
		<header>
			<nav>
				<div class="title">
					<h2>OGS</h2>
				</div>
				
				<div class="links">
					<a href="./status.php">Status</a>
					<a href="./FAQ.php">FAQ</a>
				</div>
			</nav>
		</header>
	
		<div class="container">
			<h2>Add Ticket</h2>
			
			<form action="./addticket.php" method="POST"> 
			
				<div class="left">
					<div class="content">
						<h2>Content: </h2>
						<textarea rows="20" cols="60" name = "content" placeholder="Enter your Grevience here" required></textarea>
					</div>
				</div>
				
				<div class="right">
					<div class="subject">
						<h3>Subject:</h3>
						<input type="text" name ="subject" placeholder="Enter your subject" required/>
					</div>
						
					<div class="Department">
						<h3>Department:</h3>
						<select name="department" >
							<option value="Lab">Lab Issues</option>
							<option value="Fee" >Fee Payment</option>
							<option value="Faculty" >Faculty</option>
							<option value="Canteen" >Canteen</option>
							<option value="Other" >Other</option>
						</select> 
					</div>
						
					<div class="file">
						<h3>Other files (jpg,png):</h3>
						<input type="file" name ="file" accept="images/*"/>
					</div>
						
					<div class="submit">
						<input class="btnhov" type="submit" name ="submit" value="submit"/>
					</div>
				</div>	
			</form>
		</div>
	</body>
</html>

<?php
if(isset($_REQUEST['subject'])){
	include("./conndb.php");
	session_start();
	$time = date('Y-m-d H:i:s');
	$user = $_SESSION['user'];
	$content = $_REQUEST['content'];
	$subject = $_REQUEST['subject'];
	$dept = $_REQUEST['department'];
	$file = $_REQUEST['file'];
	
	//insert to ticket
	$sql_addticket="INSERT INTO tbl_ticket VALUES('','$user','$content','$subject','$dept','$file','active')";
	$result = mysql_query($sql_addticket);
	if($result){
		echo"<script>alert('Your Ticket has been registered')</script>";
	}
	else{
		echo"<script>alert('Failed, Try Again')</script>";
	}
	
	//getting the current t_id
	$current_id = "SELECT * FROM `tbl_ticket` WHERE t_content = '$content'	";
	$current_id_result = mysql_query($current_id);
	$result = mysql_fetch_row($current_id_result);
	
	
	//insert to reply table
$sql="INSERT INTO tbl_reply VALUES('$result[0]','$time','user','$content','intiated')";
	$reply_result = mysql_query($sql);
	
	if(!$reply_result){
		echo"<script>alert('Failed, Try Again')</script>";
	}
	
}

?>



