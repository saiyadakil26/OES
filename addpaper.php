<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$que=$_POST["txtque"];
	$oa=$_POST["txtoa"];
	$ob=$_POST["txtob"];
	$oc=$_POST["txtoc"];
	$od=$_POST["txtod"];
	$ans=$_POST["txtans"];
	$mar=$_POST["txtmar"];
	if($que!=''&&$mar!=''){}else{
		header("Location: mexame.php?err=1");
		die();
	}
	session_start();
	if($ans!=$oa && $ans!=$ob && $ans!=$oc && $ans!=$od){header("Location: mexame.php?err=1");
		die();}
	 $t=$_SESSION['et'];
	$q="insert into $t(que,oa,ob,oc,od,ans,mark) values('$que','$oa','$ob','$oc','$od','$ans','$mar')";
	echo"$q";
	if (mysqli_query($con,$q))
	{
	header("Location: mexame.php?msg=1");
		die();
	}
	else
	{
	header("Location: mexame.php?err=1");
		die();
	
	}
	
?>