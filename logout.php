<?php

	unset($_SESSION['user']);
	unset($_SESSION['alert']);
	header("Location: ./login.php");

?>
