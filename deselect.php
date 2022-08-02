<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$s=$_POST["txts"];
	echo $_POST["txts"];
	session_start();
	$e=$_SESSION['eid'];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	$en=$_SESSION["en"];
	$b="$e$i$n";
	$qr="select * from $e$en where id=$x";
	echo"$qr";
	$result=mysqli_query($con,$qr);
	$row = mysqli_fetch_assoc($result);	
	$r=$row["que"] ;
	//$q="INSERT INTO `$b`(`id`, `que`, `answer`) VALUES('$x','$r','$s')";
	echo"$q";
	$qry="select * from $b where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$q = "DELETE FROM $b WHERE id='$x'"; 
	}
	mysqli_query($con,$q); 
	
	header("Location: mstexame.php");
		die();?>
?>