<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	if (isset($_GET["no"]))
	{$i=$_GET["no"];}
	session_start();
	$q="select * from exame WHERE id=$i";
	$result=mysqli_query($con,$q);
	$rw = mysqli_fetch_assoc($result);
	$ol=$rw['ename'] ; 
       	$qry="DELETE FROM `exame` WHERE id='$i'"; 
	mysqli_query($con,$qry);
	$z="result";
	$qt="DROP TABLE $i$ol";
	$result=mysqli_query($con,$qt);
	$qp="DROP TABLE $i$ol$z";
	$result=mysqli_query($con,$qp);
	$qryk="SELECT * FROM `user` WHERE utype='STUDENT'";
	$resultk=mysqli_query($con,$qryk);
	while($rwo = mysqli_fetch_assoc($resultk))
	{
	$pn=$rwo['id'];
	$pl=$rwo['uname'];
	$qts = "DELETE FROM $pn$pl WHERE eid='$i'";
	$qlp="DROP TABLE $i$pn$pl";
	$rlt=mysqli_query($con,$qlp);
	$result=mysqli_query($con,$qts);
	}
	header("Location: tke.php?msg=11");
		die();
	?>