<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	session_start();
	$unm=$_POST["txtuname"];
	$pwd=$_POST["txtupass"];
	$cap=$_SESSION["capcode"];
	if ($cap!=$_POST["txtucode"])
	{
		header("Location: myhome.php?err=3");
		die();
	}
	$qry="select * from user where uname='$unm' and pass='$pwd'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
		$rec=mysqli_fetch_assoc($rs);
		if($rec["utype"]=="TEACHER"){
		session_start();
		$_SESSION['uname'] = $rec["uname"];
		$_SESSION['id'] = $rec["id"];
		$_SESSION['pass'] = $rec["pass"];
		$_SESSION['utype'] = $rec["utype"];
		$_SESSION["location"]="teacher";
		header("Location: tech.php"); die();}
		if($rec["utype"]=="STUDENT"){
		session_start();
		$_SESSION['uname'] = $rec["uname"];
		$_SESSION['id'] = $rec["id"];
		$_SESSION['pass'] = $rec["pass"];
		$_SESSION['utype'] = $rec["utype"];
		$_SESSION["location"]="student";
		header("Location: stud.php"); die();}
		if($rec["utype"]=="admin"){
		$_SESSION['uname'] = $rec["uname"];
		$_SESSION['id'] = $rec["id"];
		$_SESSION['pass'] = $rec["pass"];
		$_SESSION['utype'] = $rec["utype"];
		$_SESSION["location"]="admi";
		header("Location: admi.php"); die();}
	}
	else
	{
		header("Location: myhome.php?err=1");
	}
	
?>
