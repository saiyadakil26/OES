<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$s=$_POST["txts"];
	session_start();
	$e=$_SESSION['eid'];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	$en=$_SESSION["en"];
	$r="result";
	$pj="$e$en$r";
	$b="$e$i$n";
	$qr="select * from $e$en where id=$x";
	echo"$qr";
	$result=mysqli_query($con,$qr);
	$row = mysqli_fetch_assoc($result);	
	$r=$row["que"] ;
	$q="INSERT INTO `$b`(`id`, `que`, `answer`) VALUES('$x','$r','$s')";
	echo"$q";
	$qry="select * from $b where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$q = "UPDATE `$b` SET id='$x',id='$x',que='$r',answer='$s' WHERE id='$x'";
  	}
	else
	{
	$q = "INSERT INTO `$b`(`id`, `que`, `answer`) VALUES('$x','$r','$s')"; 
	}
	$qpj= "INSERT INTO `$pj`( `sid`,`sname`) values ('$i','$n')";
	mysqli_query($con,$q);
	mysqli_query($con,$qpj);
	echo"$qpj";
	$m=1;
	if($_SESSION['rowcount']!=$_SESSION['fq'])
	{
        $temp = $_SESSION['fq'];
	$temp=$temp+1;
	$_SESSION['fq']=$temp;
	$m=0;
	}if($m==1)
	{header("Location: endoexame.php");
		die();}

	header("Location: stexame.php");
		die();?>