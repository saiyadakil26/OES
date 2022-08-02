<?php
	session_start();
	$u=$_SESSION['no'];
	$ue=$_SESSION['no'];
	$s=$_POST["txts"];
	$raj=$_SESSION['raj'];
	//echo $raj;
	echo$u;
	if( $raj < $s){header("Location: trr.php?no=$u?ne=$ue");
		die();}

	session_start();
	$mark=0;
	if($_SESSION['fq']==1){
	$temp=0;
	}
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$s=$_POST["txts"];
	$m=1;
	if($_SESSION['rowcount']!=$_SESSION['fq'])
	{
        $t = $_SESSION['fq'];
	$t=$t+1;
	$_SESSION['fq']=$t;
	$m=0;
	}
	echo $_SESSION['fq'];
	if(isset($_POST["txts"])){
	$temp=$_SESSION['mark']+$_POST["txts"];
	$_SESSION['mark']=$temp;
	}

	$u=$_GET["no"];
	$ue=$_GET["ne"];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$e=$_SESSION['eid'];
	$en=$_SESSION['en'];
	$qr="select * from $e$u$ue  order by id ";
	$q="select * from $e$en  order by id ";
	//echo"$q";
	//echo"$qr";
	$result=mysqli_query($con,$q);
	$rs=mysqli_query($con,$qr);
	//echo"$temp";
	$u=$_SESSION['no'];
	$ue=$_SESSION['ne'];
	$g=$_SESSION['mark'];
	//echo"$g";
	if($_SESSION['fq']== $_SESSION['rowcount'])
	{
	$tem=$_SESSION['mark'];
	$vb="result";
	$qt="UPDATE `$e$en$vb` SET `mark`='$tem' WHERE sid='$u'";
	$qts="UPDATE `$u$ue` SET `mark`='$tem' WHERE eid='$e'";
	$rss=mysqli_query($con,$qts);
	$rs=mysqli_query($con,$qt);
	//echo $_SESSION["fq"];
	//echo $_SESSION['rowcount'];
	echo $m;
	if($m==1)
	{header("Location: trs.php");
		die();}
	header("Location: trr.php?no=$u&&ne=$ue");
		die();
	}
	header("Location: trr.php?no=$u&&ne=$ue");
		die();
	
?>
