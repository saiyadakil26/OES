<?php
 session_start();
$temp = $_SESSION['fq'];
if($temp!=1)
{
$temp=$temp-1;
$_SESSION['fq']=$temp;
header("Location: stexame.php");
die();
}
else{
header("Location: stexame.php");
die();
}
?>