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
	if($rec["skey"]==$s){
	if($rec["etype"]=="DESCRIPTIVE QUESTION"){
	$b="$e$i$n";
	echo"$n";
	$_SESSION['eid']=$e;
	$qry="CREATE TABLE $b(id integer UNIQUE,que varchar(200),answer varchar(200))";
echo"$qry";
	if(mysqli_query($con,$qry)){
	$qur="select *FROM `exame` WHERE id=$e";
	$r=mysqli_query($con,$qur);
	echo"$qur";
	while($row=mysqli_fetch_assoc($r))
	{
	$nmj=$row["ename"];
	$dur=$row["edr"];
	echo $row["edr"];
		}
	$_SESSION["dur"]=$dur;
	$_SESSION["st_ti"]=date("Y-m-d H:i:s");
	$end_time=$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["dur"].'minutes',strtotime($_SESSION["st_ti"])));
$_SESSION["end_time"]=$end_time;
	$_SESSION["m"]="1";

$qurp="select *FROM `$e$nmj` order by id";
	$reso=mysqli_query($con,$qurp);
echo"$qurp";echo"1";
$js=mysqli_num_rows($reso);
echo"$js";
$_SESSION["ml"]=$js;
function gen_images($num = 1)
{
	$images = array();
	$i = 1;
	while($i < $num)
	{
		$rand = rand(1,$_SESSION["ml"]-1);
		
		while(in_array($rand, $images))
		{
			$rand = rand(1,$_SESSION["ml"]-1);
		}
		$images[$i] = $rand;
		$i ++;
	}
	return $images;
}
echo $js;
$_SESSION["ml"]=$_SESSION["ml"]+1;
$images = gen_images($_SESSION["ml"]);

//print_r($images); // Array ( [0] => 11 [1] => 21 [2] => 25 [3] => 16 [4] => 3 )
$_SESSION['rand']=$images;



	header("Location: stexame.php");
		die();}else{header("Location:endoexame.php");
		die();}}
	else
	{
	$b="$e$i$n";
	echo"$n";
	$_SESSION['eid']=$e;
	$qry="CREATE TABLE $b(id integer PRIMARY KEY,que varchar(200),answer varchar(200))";
echo"$qry";
	if(mysqli_query($con,$qry)){
	$qur="select *FROM `exame` WHERE id=$e";
	$r=mysqli_query($con,$qur);
	echo"$qur";
	while($row=mysqli_fetch_assoc($r))
	{
	$dur=$row["edr"];
	$nmj=$row["ename"];
	echo $row["edr"];
	echo $qur;
		}
	$_SESSION["dur"]=$dur;
	$_SESSION["st_ti"]=date("Y-m-d H:i:s");
	$end_time=$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["dur"].'minutes',strtotime($_SESSION["st_ti"])));
$_SESSION["end_time"]=$end_time;
$_SESSION["m"]="1";
$qurp="select *FROM `$e$nmj` order by id";
	$reso=mysqli_query($con,$qurp);
echo"$qurp";echo"1";
$js=mysqli_num_rows($reso);
echo"$js";
$_SESSION["ml"]=$js;
function gen_images($num = 1)
{
	$images = array();
	$i = 1;
	while($i < $num)
	{
		$rand = rand(1,$_SESSION["ml"]-1);
		
		while(in_array($rand, $images))
		{
			$rand = rand(1,$_SESSION["ml"]-1);
		}
		$images[$i] = $rand;
		$i ++;
	}
	return $images;
}
echo $js;
$_SESSION["ml"]=$_SESSION["ml"]+1;
$images = gen_images($_SESSION["ml"]);

//print_r($images); // Array ( [0] => 11 [1] => 21 [2] => 25 [3] => 16 [4] => 3 )
$_SESSION['rand']=$images;


header("Location: mstexame.php");
		die();
	
}else{header("Location:endexame.php");
		die();}}
	}else{	
	header("Location: gexame.php?err=1");
		die();}
	}
	else
	{
	header("Location: gexame.php?err=2");
		die();
	
	}
	
?>