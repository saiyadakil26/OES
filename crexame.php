<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$en=$_POST["txtename"];
	$esk=$_POST["txtskey"];
	$ed=$_POST["txted"];
	$et=$_POST["cmbtype"];
echo"$et";
	session_start();
	$cid = $_SESSION['id'];
	
	$q="insert into exame (ename,skey,etype,edr,cid) values('$en','$esk','$et','$ed','$cid')";
	mysqli_query($con,$q);
	$last_id = mysqli_insert_id($con);
	//$id=$rec["id"];
	$_SESSION['etl']="$last_id";
	$_SESSION['et']="$last_id$en";
	$x="$last_id$en";
	if($et=="MCQ"){
	echo"$x";
	$qry="CREATE TABLE $last_id$en(id integer PRIMARY KEY AUTO_INCREMENT,que varchar(50),oa varchar(50),ob varchar(50),oc varchar(50),od varchar(50),ans varchar(50),mark integer)";}
	else{$qry="CREATE TABLE $last_id$en(id integer PRIMARY KEY AUTO_INCREMENT,que varchar(200),mark integer)";}echo"$qry";
	$r="result";
	$qr="CREATE TABLE $last_id$en$r(id integer PRIMARY KEY AUTO_INCREMENT,sname varchar(200),sid integer UNIQUE,mark integer NULL DEFAULT '1000000000')";echo"$qr";
	mysqli_query($con,$qr);
	if (mysqli_query($con,$qry))
	{
	if($et=="MCQ"){
	header("Location: mexame.php");
		die();}
	else{header("Location: texame.php");
		die();}
	}
	else
	{
	header("Location: cexam.php?err=1");
		die();
	
	}
	
	
?>
