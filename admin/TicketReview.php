<?php
	session_start();
	include("../conndb.php");
	//include("./error_handler.php");
?>
<html>
	<head>
		<title>Ticket Review Admin</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style>
			body{
				flex-direction: column;
			}
			.container{
				width: 80vw;
				height: 115vh ;
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
				width: 60vw;
			}
			p{
				text-align: left;
				padding: 2%;
				background-color: #130a2f;
				border-radius: 15px;
				
			}
			.right{
				height: 50vh;
				padding: 8%;
			}
			form{
				display: flex;
				padding:  0% 5%;
			}
			table{
				height: 50vh;
				width: 15vw;
				border-radius: 15px;
				text-align: center;
				border-collapse: collapse;
			}
			td,th,tr{
				border-radius: 15px;
			}
			th{
				border-bottom: .5px solid white;
			}
			input[type="submit"]{
				border-radius: 10px;
				border: none;
				background-color: #521378;
				color: white;
				width: 80px;
				height: 40px;
			}
			.complete{
				border-radius: 10px;
				border: none;
				background-color: #521378;
				color: white;
				width: 80px;
				height: 40px;
				text-decoration: none;
				display: grid;
				place-content: center;
			}
			.submit{
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 15%;
			}
			input,textarea{
				border-radius: 15px;
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
					<a href="./Status.php">STATUS</a>
					<a href="./History.php">HISTORY</a>
					<a href="./stat.php">STATISTICS</a>
					<a href="./FAQ.php">ADD FAQ</a>
					<a href = "../logout.php">LOGOUT</a>
				</div>
			</nav>
		</header>
		<?php
		$id = $_GET['id'];
		$sql = "SELECT * FROM `tbl_reply` where t_id ='$id' ORDER BY `t_time` ASC";
		$result = mysql_query($sql);
	?>
		<div class="container">
			<h2>Subject:<?php
				$subject_q = "SELECT t_subject FROM `tbl_ticket` where t_id='$id'";
				$subject_r = mysql_query($subject_q);
				$value = mysql_fetch_row($subject_r);
				echo"  $value[0]";
			 ?></h2>
			
			<h2>Department:<?php
				$subject_q = "SELECT t_department FROM `tbl_ticket` where t_id='$id'";
				$subject_r = mysql_query($subject_q);
				$value = mysql_fetch_row($subject_r);
				echo"  $value[0]";
			 ?></h2>
			<form action="./TicketReview.php" method="GET"> 
				<input type = "hidden" name ="id" value="<?php echo $id;?>">
				<div class="left">
					<div class="user">
					<?php 
						while($row = mysql_fetch_array($result)){
					?>
						<h3><?php echo $row['t_role'];?></h3>
						<p>
							<?php echo $row['t_reply'];?>
						</p>
					<?php
						}
					?>
		</div>
					
					<div class="content">
						<h3>Content: </h3>
						<textarea rows="1" cols="40" name ="content" placeholder="Enter your Response here" required></textarea>
					</div>
				</div>
				
				<div class="right">
					<div class="status">
						<h3>Status:</h3>
						<div class="status_con">
							<table Bgcolor="#090415" border="1" frame="hside" rules="cols">
								<tr>
									<th>Time</th>
									<th>Status</th>
								</tr>
								<?php 
									$sql = "SELECT * FROM `tbl_reply` where t_id ='$id'ORDER BY `t_time` ASC";
									$result=mysql_query($sql);
									while($row = mysql_fetch_array($result)){
								?>
								<tr>
									<td><?php echo $row['t_time'];?></htd>
									<td><?php echo $row['t_status'];?></htd>
								</tr>
								<?php
									}
								?>				
							</table>
						</div>
					</div>
						
					<div class="submit">
						<input class="btnhov" type="submit" name ="submit" value="submit"/>
					</div>
					<div class="submit">
						<a href=<?php echo "./complete.php?id=$id"?> class="complete">Completed</a>
					</div>
				</div>	
			</form>
		</div>
	</body>
</html>


<?php
	if(isset($_REQUEST['content'])){
		$time = date('Y-m-d H:i:s');
		$content = $_REQUEST['content'];
		$sql="INSERT INTO tbl_reply VALUES('$id','$time','admin','$content','admin reply')";
		$reply_result = mysql_query($sql);
		header("Location: ./TicketReview.php?id=$id");
	}
?>
			
			
	</body>
</html>
