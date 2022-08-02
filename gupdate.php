<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$b=$_POST["ename"];
	$d=$_POST["skey"];
	$e=$_POST["edr"];
	if (isset($_GET["no"]))
	if($b=="" && $d=="" && $e==""){header("Location: tke.php?msg=10");
		die();}
	{$i=$_GET["no"];}
	session_start();
	$q="select * from exame WHERE id=$i";
	$result=mysqli_query($con,$q);
	$rw = mysqli_fetch_assoc($result);
	$ol=$rw['ename'] ; 
       	$qry="UPDATE exame SET 	ename='$b',skey='$d',edr='$e' WHERE id='$i'"; 
	mysqli_query($con,$qry);
	$z="result";
	$qt="RENAME TABLE $i$ol TO $i$b";
	$result=mysqli_query($con,$qt);
	$qp="RENAME TABLE $i$ol$z TO $i$b$z";
	$result=mysqli_query($con,$qp);
	
	$qryk="SELECT * FROM `user` WHERE utype='STUDENT'";
	$resultk=mysqli_query($con,$qryk);
	while($rwo = mysqli_fetch_assoc($resultk))
	{
	$pn=$rwo['id'];
	$pl=$rwo['uname'];
	$qts = "UPDATE $pn$pl SET ename='$b' WHERE eid='$i'";
	$result=mysqli_query($con,$qts);
	}
	header("Location: tke.php?msg=12");
		die();
	?>