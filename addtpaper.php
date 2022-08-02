<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$que=$_POST["txtque"];
	$mar=$_POST["txtmar"];
	session_start();
	 $t=$_SESSION['et'];
	//echo 1;
	echo $mar; echo $que;
	if($que!=''&&$mar!=''){}else{
		header("Location: texame.php?err=1");
		die();
	}
	$q="insert into $t(que,mark) values('$que','$mar')";
	echo"$q";
	if (mysqli_query($con,$q))
	{
	header("Location: texame.php?msg=1");
		die();
	}
	else
	{
	header("Location: texame.php?err=1");
		die();
	
	}
	
?>