<?php
	include("../conndb.php");
	//include("../error_handler.php");
?>

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
	
	
	$exportData ="\nNumber of Rquest Completed:$Request_Completed";
	$exportData.="\nNumber of Request Pending: $Request_Pending";
	$exportData.="\nNumber of Request Ignored: $Request_Ignored";
	$exportData.="\nNumber of Total Request: $Total_REQUEST";
	$exportData.="\nAverage Request Per Day: $ARD";
	
	header('Content-Type:application/octet-stream');
	header('Content-Disposition:attachment; filename = "statistics.txt"');
	
	echo $exportData;
	exit();
?>
