<?php
	include("../conndb.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM `tbl_ticket`WHERE t_id=$id ";
	$result=mysql_query($sql);
	if($result){
		header("Location:./status.php");
	}
?>
