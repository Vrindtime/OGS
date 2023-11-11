<html>
	<head>
		<title>ADD FAQ</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style>
			body{
				flex-direction: column;
			}
			p{
				text-align: left;
				padding: 0% 5%;
				font-size: 1.3rem;
				max-width:
			}
			.container{
				width:80vw;
				min-height: 85vh;
			}
			.container > h2{
				flex-direction: row;
				text-align: start;
				justify-content: left;
				padding:1% 5%;
			}
			.subcontainer{
				background-color: #130a2f;
				padding: 2% 5%;
				border-radius: 15px;
				min-height: 60vh;
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
			input{
				border-radius: 15px;	
			}
			textarea{
				border-radius: 15px;
				width: 100%;
				min-height:40vh;
			}
			.sub_sub{
				display: flex;
				align-items: center;
				justify-content: space-between;
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
					<a href="./History.php">HISTORY</a>
					<a href="./stat.php">STATISTICS</a>
					<a href="./FAQ.php">ADD FAQ</a>
				</div>
			</nav>
		</header>
		<div class="container">
			<h2>ADD Ticket page</h2>
			<form action="./FAQ.php" method="POST">
				<div class="sub_sub">
					<div>
						<label for="subject">Subject:</label>
						<input type="text" name="subject" id="subject">
					</div>
					<input type="submit" value ="submit">
				</div>
 
				<br>
					<div class="subcontainer">

				<p>
					<label for="content">Content:</label><br>
					<textarea name="content" id="content">
					</textarea>
				</p>
			</div>
			</form>
		</div>
	</body>
</html>
<?php
	include("../conndb.php");
	if(isset($_REQUEST['subject'])){
		$subject = $_REQUEST['subject'];
		$content = $_REQUEST['content'];
		$sql = "INSERT INTO tbl_faq VALUES ('','$subject','$content')";
		
		$result= mysql_query($sql);
		if($result){
			echo "<script>alert('Added FAQ Successfully')</script>";
		}
		else{
			echo "<script>alert('Added FAQ Successfully')</script>";		
		}
	}
?>
