<?php
function error_msg($type,$msg,$file,$line){
	$log_msg = "Error $type in $file at line : $msg:";
	$log_path = "/opt/lampp/htdocs/BCA21-24/MiniProject/error_log_file.txt";
	error_log($log_msg.PHP_EOL , 3 , $log_path);
	echo "<script>alert('An Error has Occured Please contact admin')</script>";
}
set_error_handler("error_msg");
?>

