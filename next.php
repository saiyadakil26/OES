<?php
 session_start();
$temp = $_SESSION['fq'];
$temp=$temp+1;
$_SESSION['fq']=$temp;
if($temp!=1)
{
		header("Location: stexame.php");
		die();
}
?>