<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	if (isset($_GET["no"]))
	{$i=$_GET["no"];}
	session_start();
	$q="select * from user WHERE id=$i";
	$result=mysqli_query($con,$q);
	$rw = mysqli_fetch_assoc($result);
	$ol=$rw['uname'] ; 
       	$qry="DELETE FROM `user` WHERE id='$i'"; 
	mysqli_query($con,$qry);
	$z="result";
	$qt="DROP TABLE $i$ol";
	$result=mysqli_query($con,$qt);
	$qryk="SELECT * FROM `exame` WHERE etype='MCQ' OR etype='DESCRIPTIVE QUESTION' ";
	$resultk=mysqli_query($con,$qryk);
	while($rwo = mysqli_fetch_assoc($resultk))
	{
	$pn=$rwo['id'];
	$pl=$rwo['ename'];
	$qts = "DELETE FROM $pn$pl WHERE eid='$i'";
	$qlp="DROP TABLE $pn$i$ol";
	$rlt=mysqli_query($con,$qlp);
	$result=mysqli_query($con,$qts);
	$qp="DELETE FROM $pn$pl$z WHERE sid='$i'";
	$result=mysqli_query($con,$qp);
	
	}
	header("Location: usr.php?msg=11");
		die();
	?>