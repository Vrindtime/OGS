<html>
	<head>
		<title>Status</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			body{
				flex-direction: column;
			}
			.container{
				min-width:80vw;
			}
			.container > h2{
				text-align: start;
				justify-content: center;
				padding:1% 5%;
			}
			.subcontainer{
				background-color: #090415;
				border-radius: 15px;
				padding: 0% 5%;
				display: flex;
				width: 70vw;
				align-items: center;
				justify-content: space-between;
				margin-bottom: 5px;
				
			}
			.subcontainer > .ticket{
				width: 50vw;
				text-align: start;
			}
			.subcontainer > .ticket > p{
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
				padding: 3% 5%;
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
					<a href="./status.php">Status</a>
					<a href="./addticket.php">Add Ticket</a>
					<a href = "./logout.php">LOGOUT</a>
				</div>
			</nav>
		</header>
	
		<div class="container">
			<h2>Frequenty Asked Questions:</h2>
			<?php
				include("./conndb.php");
				//include("./error_handler.php");
				$sql = "SELECT * FROM `tbl_faq` ORDER BY f_id DESC";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result)){
			?>
			<div class="subcontainer">
				<div class="ticket">
					<p><?php echo $row['f_subject'];?></p>
				</div>
				
				<div class="view">
					<a class="btnhov" href="./FAQview.php?id=<?php echo $row['f_id'];?>">View</a>
				</div>
			</div>
			<?php }?>
			</div>
		</div>
	</body>
</html>
