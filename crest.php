<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$e=$_POST["txte"];
	$s=$_POST["txts"];
	session_start();
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$qry="select * from exame where id='$e'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['en']=$rec["ename"];
	$_SESSION['eid']=$e;
	if($rec["skey"]==$s){
	if($rec["cid"]==$i){
	if($rec["etype"]=="DESCRIPTIVE QUESTION"){
	header("Location: trs.php");
		die();}
	else{header("Location:mrs.php");
		die();}
	}}}header("Location: cretresult.php?msg=1");
		die();	
?>