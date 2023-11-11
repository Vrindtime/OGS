<?php
	include("../conndb.php");
	include("../error_handler.php");
?>

<html>
	<head>
		<title>Status</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style>
			body{
				flex-direction: column;
			}
			.container{
				
			}
			.skill > h2{
				text-align: start;
				justify-content: center;
				padding:1% 5%;
			}
			.skill{
				max-width:90vw;
				max-height: 100%;
				background: #130a2f;
				width: 85%;
				height: 65vh;
				margin: 20px auto;
				color: #fff;
				padding: 20px;
				box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
				border-radius: 15px;
				
			}
			.skill li{
				display: flex;
				margin: 2px 0;
				padding: 5px;
				list-style: none;
				align-items: center;
			}
			.bar{
				background: #353b48;
				display: block;
				height: 20px;
				width: 50vw;
				border: 1px solid rgba(0,0,0,0.1);
				border-radius: 10px;
				overflow: hidden;
				box-shadow: 0 1px 3px rgba(0,0,8,8.12), 8 1px 2px rgba(0,0,0,0.24);
				transition: 0.3s cubic-bezier;
			}
			.bar:hover{
				box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0,0.22);
			}
			.bar span{
				height: 20px;
				float: left;
				background: linear-gradient(135deg,rgb(19, 92, 30)0%, rgb(14, 218, 23)100%)
			}
			.number_of_request_completed{
				width: 65%;
				animation: RC 3s;
			}
			.number_of_request_pending{
				width: 30%;
				animation: RP 3s;
			}
			.number_of_request_ignored{
				width: 15%;
				animation: RI 3s;
			}
			.number_of_total_request{
				width: 110%;
				animation: TR 3s;
			}
			@keyframes RC{
				0%{
					width: 0%;
				}
				100%{
					width: 65%;
				}
			}
			@keyframes RP{
				0%{
					width: 0%;
				}
				100%{
					width: 30%;
				}
			}
			@keyframes RI{
				0%{
					width: 0%;
				}
				100%{
					width: 15%;
				}
			}
			@keyframe TR{
				0%{
					width: 0%;
				}
				100%{
					width: 110%;
				}
			}
			
			.progress{
				display: block;
				height: 20px;
				background: linear-gradient(135deg,rgba(236,0,140,1)0%, rgba(252,103,183,1)100%);
				width: 0;
				transition: width 3s;
			}
			
			.foot{
				margin-top: 30px;
				display: flex;
				justify-content: space-between;
				align-items: center;
			}
			.ARD{
				background: #521378;
				border-radius: 15px;
				padding: 5% 10%;
				text-align: center;
			}
			.right{
				display: flex;
				justify-content: center;
				align-items: center;
				width: 50%;
			}
			a.butt{
				width: 10vw;
				height: 6vh;
				color: #e0d9f7;
				background: #521378;
				border-radius: 15px;
				display: flex;
				justify-content: center;
				align-items: center;
				text-decoration: none;
				margin: 0px 10px;
			}
			button{
				background-color: #521378;
				border-radius: 20px;
				margin-left: 20px;
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
					<a href = "../logout.php">LOGOUT</a>
				</div>
			</nav>
		</header>
	
		
			
			<div class="skill">
				<h2>STATISTICS:</h2>
					<?php
						
						//request completed
						$query = "Select Count(*) from tbl_ticket where t_active = 'complete'";
						$sql = mysql_query($query);
						$fetch = mysql_fetch_row($sql);
						$value = $fetch[0];
						$Request_Completed = $value;
						
						//pending
						$query = "Select Count(*) from tbl_ticket where t_active = 'active'";
						$sql = mysql_query($query);
						$fetch = mysql_fetch_row($sql);
						$value = $fetch[0];
						$Request_Pending = $value;
						
						//Ignored
						$query = "Select Count(*) from tbl_ticket where t_active = 'delete'";
						$sql = mysql_query($query);
						$fetch = mysql_fetch_row($sql);
						$value = $fetch[0];
						$Request_Ignored = $value;
						
						//total
						$query = "Select Count(*) from tbl_ticket";
						$sql = mysql_query($query);
						$fetch = mysql_fetch_row($sql);
						$value = $fetch[0];
						$Total_REQUEST  = $value;
						
						//Average				
						$query="SELECT DATEDIFF(MAX(t_time),MIN(t_time)) FROM `tbl_reply` ";
						$sql = mysql_query($query);
						$fetch = mysql_fetch_row($sql);
						$t_value = $fetch[0];
						$value = $t_value/$Total_REQUEST;
						$ARD = round($value) ;
						
						$skills = array(
							'Number_of_Request_Completed: '=>$Request_Completed,
							'Number_of_Request_Pending: '=> $Request_Pending,
							'Number_of_Request_Ignored: '=> $Request_Ignored,
							'Number_of_Total_Request: '=> $Total_REQUEST,
						);
					?>
					<table>
					<?php
						foreach($skills as $skill => $width){
							echo"<tr>";
							echo "<td><h3>".$skill."</h3></td>";
							//progress Bar
							echo '<td><span class="bar">
										<span class="progress'.strtolower($skill).'"style="width: '.$width.'%;"> </span>
									</span></td>';
							echo "<td><h3>".$width."</h3></td>";
							echo"</tr>";
						}
					?>
					</table>
					<div class ="foot">
						<div class="ARD">
							<h3>Average Request per Day: <?php echo $ARD; ?></h3>
						</div>
						<div class="right">
							<button onclick="reset()" class="butt btnhov">
								<a href="./reset.php" class="butt btnhov"><h3>Reset</h3></a>
							</button>
							
							<button onclick="expo()" class="butt btnhov">
								<a class="butt btnhov" href="./export.php"><h3>Export</h3></a>
							</button>
						</div>
					</div>				
			</div>	
		<script>
			function reset(){
				alert("ARE YOU SURE! This is clear all the ticket details in the Database!");
				window.location.href="./reset.php";
			}
			function expo(){
				alert("ARE YOU SURE! You want to download the stats of the ticket details!");
				window.location.href="./export.php";
			}
		</script>		
	</body>
</html>


