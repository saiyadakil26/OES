<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	
	$fnm=$_POST["txtfname"];
	$mnm=$_POST["txtmname"];
	$snm=$_POST["txtsname"];
	$catg=$_POST["cmbtype"];
	$reg=$_POST["txtreg"];
	$col=$_POST["txtcoll"];
	$email=$_POST["txtemail"];
	$bdt=$_POST["txtdob"];
	$unm=$_POST["txtuname"];
	$pwd=$_POST["txtpass"];
	$cnfpwd=$_POST["txtcpass"];
	$mno=$_POST["txtmob"];
	if($catg=="admin"){$reg=$mno;}
	$max=9999999999;
	$min=1000000000;
	if($mno>=$min && $mno<=$max)
	{}else{header("Location: adus.php?msg=0");
		die();}
	$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email) 
		{header("Location: adus.php?msg=14");
		die();
   		 }


	
/*	$d=substr($bdt,0,2);
	$m=substr($bdt,3,2);
	$y=substr($bdt,6,4);

	if (!(checkdate($bdt)))
	{
	header("Location: newuser.php?err=1");
	die();

	}*/
	
	if ($cnfpwd!=$pwd)
	{
		header("Location: adus.php?err=2");
		die();
	}
	if ($pwd=="" && $catg=="" && $reg=="")
	{
		header("Location: adus.php?err=2");
		die();
	}
	//$bdt=$y."-".$m."-".$d;
	$qry="insert into user (fname,mname,sname,utype,regno,cname,email,dob,uname,pass,mono) values ('$fnm','$mnm','$snm','$catg','$reg','$col','$email','$bdt','$unm','$pwd','$mno')";
if (mysqli_query($con,$qry))
	{
	$last_id = mysqli_insert_id($con);
	echo"$catg";
	if($catg=="STUDENT"){
	$q="CREATE TABLE $last_id$unm(id integer PRIMARY KEY AUTO_INCREMENT,sid integer,sname varchar(200),eid integer UNIQUE,ename varchar(200),mark varchar(50))";
	echo"$q";
	mysqli_query($con,$q);
	}
	header("Location: usr.php?msg=1");
		die();
	}
	else
	{
	header("Location: adus.php?err=1");
		die();
	
	}
	
	
?>