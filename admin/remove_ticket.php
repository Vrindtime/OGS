<?php
	include("../conndb.php");
	$id = $_GET['id'];
	$sql = "UPDATE `tbl_ticket` SET `t_active`='delete' WHERE t_id=$id";
	$result=mysql_query($sql);
	if($result){
		header("Location:./Status.php");
	}
?>
