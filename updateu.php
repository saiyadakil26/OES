<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$a=$_POST["ename"];
	$b=$_POST["fname"];
	$c=$_POST["mname"];
	$g=$_POST["sname"];
	$d=$_POST["pass"];
	$e=$_POST["email"];
	$f=$_POST["mono"];
	$i=$_GET["no"];
	$n=$_GET["ne"];
	$q="select * from user where id=$i ";
	$result=mysqli_query($con,$q);
	$rw = mysqli_fetch_assoc($result);
	$ol=$rw['uname'] ; 
       	$qry="UPDATE user SET 	pass='$d',mono='$f',email='$e',uname='$a',fname='$b',mname='$c',sname='$g' WHERE id='$i'"; 
	mysqli_query($con,$qry);
	
	$qt="RENAME TABLE $i$ol TO $i$a";
	$result=mysqli_query($con,$qt);
	$qryk="SELECT * FROM `exame` WHERE etype='MCQ' OR etype='DESCRIPTIVE QUESTION'";
	$resultk=mysqli_query($con,$qryk);
	while($rwo = mysqli_fetch_assoc($resultk))
	{$ib=$rwo['id'];
	$qtm="RENAME TABLE $ib$i$ol TO $ib$i$a";
	$result=mysqli_query($con,$qtm);
	echo"1";
	$z="result";
	$un=$rwo['ename'];
	$qts = "UPDATE $i$a SET sname='$a' WHERE sid='$i'";
	$result=mysqli_query($con,$qts);
	$qts = "UPDATE $ib$un$z SET sname='$a' WHERE sid='$i'"; 
	$result=mysqli_query($con,$qts);
	}
	header("Location: usr.php?msg=12");
		die();
?>