<?php
	$id = $_GET['id'];
	include("../conndb.php");
	$sql = "UPDATE `tbl_ticket` SET `t_active`= 'complete' WHERE t_id = $id";
	$result = mysql_query($sql);
	if($result){
		header("Location:./Status.php");
	}
	else{
		echo"<script>alert('Error')</script>";
	}
?>

	
