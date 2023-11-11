<?php
	include("../conndb.php");
	//include("../error_handler.php");
?>

<?php 
	$ticket_query = "TRUNCATE TABLE tbl_ticket;";
	$ticket_sql = mysql_query($ticket_query);
	
	
	$reply_query = "TRUNCATE TABLE tbl_reply";
	$reply_sql = mysql_query($reply_query);
	
	if($ticket_sql && $reply_sql){
		echo "success";
		header("Location:./stat.php");
		exit();
		
	}
	else{
		echo "failed";
	}	
?>
