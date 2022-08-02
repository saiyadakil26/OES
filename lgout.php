<?php
	session_start();
	session_destroy();
	header("Location: myhome.php?msg=10"); die();
?>