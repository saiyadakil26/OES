<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$qry="DROP TABLE 82108srk";
	//$q="DELETE FROM `636anand` WHERE `636anand`.`id` = 1";
	echo"$qry";
	//$qry="SELECT * FROM `exame` WHERE etype='MCQ' OR //etype='DESCRIPTIVE QUESTION'";
//	$result=mysqli_query($con,$qry);
//	while($rw = mysqli_fetch_assoc($result))
	//{
	//echo"1";
	//}
	mysqli_query($con,$qry)?>