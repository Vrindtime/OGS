<?php
	include("../conndb.php");
	include("../error_handler.php");
?>
<html>
	<head>
		<title>Status Admin</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style>
			body{
				flex-direction: column;
			}
			.container{
				min-width:80vw;
				min-height: 80vh;
			}
			.container > h2{
				text-align: start;
				justify-content: center;
				padding:1% 3%;
			}
			.subcontainer{
				background-color: #090415;
				border-radius: 15px;
				padding: 0% 5%;
				display: flex;
				width: 70vw;
				align-items: center;
				justify-content: space-evenly;
				margin-bottom: 2vh;
			}
			.subcontainer > .ticket{
				width: 50vw;
				text-align: start;
			}
			.subcontainer > .ticket > h2{
				text-align: start;
			}
			.subcontainer > .view , .update{
				width: 10vw;
				text-decoration: none;
			}
			.subcontainer > .view > a{
				text-decoration: none;
				color: #e8b6ff;
				background-color: #521378;
				padding: 5% 10%;
				border-radius: 5px;
			}
			.subcontainer > .update > a{
				text-decoration: none;
				color: #e8b6ff;
				background-color: #130a2f;
				padding: 6% 10%;
				border-radius: 5px;
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
					<a href = "../logout.php">LOGOUT</a>
				</div>
			</nav>
		</header>
	
		<div class="container">
			<h2>Status:</h2>
			<?php
				
				if(isset($_SESSION['alert'])){
					$name = $_SESSION['alert'];
					echo "<script>alert('$name')</script>";
					unset($_SESSION['alert']);
				}
				$sql = "SELECT * FROM `tbl_ticket` WHERE t_active = 'active'";
				$result = mysql_query($sql);
				while($ticket = mysql_fetch_array($result)){
				$id = $ticket['t_id']; 
			?>
			<div class="subcontainer">
				<div class="ticket">
					<h2>Ticket: <?php echo $ticket['t_subject']?></h2>
				</div>
				
				<div class="view ">
					<a  class="btnhov" href=<?php echo "./TicketReview.php?id=$id"?>>View</a>
				</div>
				
				<div class="Update">
					<a class="btnhov" href=<?php echo "./remove_ticket.php?id=$id"?>>Delete</a>
				</div>
			</div>
			<?php
				}
			?>
		</div>
		</div>
	</body>
</html>
