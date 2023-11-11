<?php
	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("OGS",$conn);
	if(!$db){
		die("Connection to Database Error".mysql_error());
	}
?>
