<?php session_start(); if(isset($_SESSION["location"]) && $_SESSION["location"]=="admi"){ ?>
<html>
<head>
<title>OES</title>
        <link rel="shortcut icon" href="logo.png" type=" image/png">
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);

	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
?>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 95px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<style>@media only screen and (max-width: 40em) {
    thead th:not(:first-child) {
        display: none;
    }

    td, th {
        display: block;
    }

    td[data-th]:before  {
        content: attr(data-th);
    }
}</style>
<style>
#mycon {
  background-color:black;
  color: black;
  width:auto;
  height:auto%;
align:center;
}
#myHeader {
  background-color:limegreen;
  color: black;
  width:100%;
  height:auto;
text-align:center;
} 
#hb1 {
  background-color:bisque;
  color: black;
  width:15%;
  height:auto;
float: left;
} 
#hb2 {
  background-color:limegreen;
  color: black;
  width:70%;
  height:auto;
float: left;
text-align:center;
color:azure;
} 
#hb3 {
  background-color:bisque;
  color: black;
  width:15%;
  height:auto;
float:right;
} 
#mymain {
  background-color:lightgray;
  color: black;
  width:100%;
  height:auto;
float: left;
}
#myfooter {
  background-color:#f0ce54;
  color: black;
  width:100%;
  height:10%;
float: left;
vertical-align: middle;
text-align :center;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.pa:hover {
  background-color:gold;
  color: black;
}

 </style>
</head>
<body>
<div id="mycon">
  <div id="myHeader">
	<div id="hb1"><img src="logo.png"alt="LOGO OF AAU" width=68 height=68></div>
	<div id="hb2"><h2>ONLINE EXAMINATION SYSTEM,AAU</h2></div>
	<div id="hb3" align=center>
	<table><tr><td><div class="dropdown">
 <img src="avatar.jpg"alt="LOGO OF AAU" width=63 height=63>
  <div class="dropdown-content">
  <p class="pa"><a href="usr.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

<p class="pa"><img src="avatar.jpg"alt="LOGO OF AAU" width=15 height=15>
<a href=prof.php><?php
 session_start();
$_SESSION["fq"]=1;
$temp = $_SESSION['uname'];
echo"$temp"; ?></p></a>

<p class="pa"><a href="lgout.php"><img src="logout.png"alt="LOGO OF AAU" width=15 height=15>  LOG OUT</a></p>
	</div></td></tr>
  </table>
	</div>
 <div id="mymain"><table border=5 width=100%><tr><td bgcolor="skyblue">
<p  style="color:yellow;"><b>YOUR CURRENT LOCATION || </b><a href="lgout.php">HOME</a><a href="admi.php"> >> DASHBORD </a><a href="usr.php">>>USER'S REPORT</a></p></td></tr></table><br>
<table border=1 align=center bgcolor=limegray><tr><td colspan=3>
<p align=center style='color:blue;'>YOU CAN SEARCH HERE AND FOUND RESULT</p></td><th colspan=4><input type=button class="block" value="ADD NEW USER" style='background-color:yellow; border-color:orange; color:darkslategray;' onClick="document.location.href='adus.php'"></th></tr>
<FORM>
	<tr align=center><th>User Id:</th><td><input type=text name=txtid align=center size=20 placeholder="ENTER USER ID" ></td>
	<th>Mobile No:</th><td><input type=text name=txtcid size=20 align=center placeholder="ENTER MOBILE.No"></td></tr>
	<tr align=center><th>User Name:</th><td><input type=text name=txtname size=20 align=center placeholder="ENTER USER NAME"></td>
	<th>Type of User:</th><td><select name=cmbtype align=center>
			<option value='0'>---Select---</option>
			<option value='STUDENT'>STUDENT</option>
			<option value='TEACHER'>TEACHER</option>
			<option value='admin'>ADMIN</option></td>	
	<tr><th colspan=4><input type=submit name=s1 class="block" value="SEARCH" style='background-color:blue; border-color:orange; color:white;'></th></tr>
</FORM>
</table>
<?php	if (isset($_GET["msg"]))
	{
		if ($_GET["msg"]==1)
			echo "<caption><font color=#a00>USER ADD SUCSSESFULLY </font></caption>";
	if ($_GET["msg"]==12)
			echo "<caption><font color=#a00>USER UPDATE SUCSSESFULLY </font></caption>";
	if ($_GET["msg"]==11)
			echo "<caption><font color=#a00>USER DELETE SUCSSESFULLY </font></caption>";
	
	
	}
	$qry="select * from user where 1=1 ";
	if (isset($_GET["txtname"]) && $_GET["txtname"]!="")
		$qry=$qry." and uname like '%".$_GET["txtname"]."%'";
	if (isset($_GET["txtid"]) && $_GET["txtid"]!="")
		$qry=$qry." and id='".$_GET["txtid"]."'";
	if (isset($_GET["txtcid"]) && $_GET["txtcid"]!="")
		$qry=$qry." and mono='".$_GET["txtcid"]."'";
	if (isset($_GET["cmbtype"]) && $_GET["cmbtype"]!="" && $_GET["cmbtype"]!='0')
		$qry=$qry." and utype='".$_GET["cmbtype"]."'";
	
	$qry=$qry." order by id DESC";
	//echo "<br>$qry";//echo "<br>bbbb-$a";
	$rs=mysqli_query($con,$qry);
	echo"<p align=center style='color:blue;'>FOUND RESULT :- ".mysqli_num_rows($rs)."</p>";
	if(mysqli_num_rows($rs)==0){header("Location: usr.php?err=1");
		die();}
	while ($val=mysqli_fetch_assoc($rs))
	{?>
		<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=50% hight=auto>
	<tr>
	<td bgcolor="gold"><b>USER ID:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['id'];?></font></td>
	<?php $gg=$val["id"]; //echo"$gg";
	$dj="select * from photo where id='$gg'";
	$rps=mysqli_query($con,$dj);
	if (mysqli_num_rows($rps)==1)
	{
	$reco=mysqli_fetch_array($rps);
	//echo $reco['img'];
	?><td rowspan=5 align=center bgcolor="darkslategray">
	<img src="image/<?php echo $reco['img']; ?>" alt="<?php echo $reco['img']; ?>" width=200 height=200></td></tr><?php } ?>


		</tr><tr>
		<td bgcolor="gold"><b>USER NAME:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['uname'] ;?></font></td>
		</tr><tr>
		<td bgcolor="gold"><b>USER TYPE:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['utype'] ;?></font></td></tr><tr>
<td bgcolor="gold"><b>USER E-MAIL:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['email'] ;?></font></td></tr>
<tr>
		<td bgcolor="gold"><b>USER MOBILE.NO :- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['mono'] ;?></font></td></tr><tr >

<?php if($val["utype"]!="admin"){ ?>
<th><input type="button" class="block" value="UPDATE USER" onClick="document.location.href='usrupdate.php?no=<?php echo $val["id"];?>&&ne=<?php echo $val["uname"];?>&&b=1'" style="background-color:GREEN;"></th>
<?php  
    echo '<script type="text/javascript"> ';  
    echo ' function openulr(newurl) {';  
    echo '  if (confirm("ARE YOU SURE !!")) {';  
    echo '    document.location = newurl;';  
	echo '  }';  
    echo '}';  
    echo '</script>';  
?>  


<th><input type="button" class="block" value="DELETE USER" onClick="javascript:openulr('dua.php?no=<?php echo $val["id"];?>&&ne=<?php echo $val["uname"];?>&&b=1');" style="background-color:RED;"></th>
<?php if($val["utype"]=="STUDENT"){ ?>
<th colspan=3><input type="button" class="block" value="RESULT'S OF USER" onClick="document.location.href='rou.php?no=<?php echo $val["id"];?>&&ne=<?php echo $val["uname"];?>&&b=1'" style="background-color:BLUE;"></th>	</tr>	
<?php } ?>
<?php if($val["utype"]=="TEACHER"){ ?>
<th colspan=3><input type="button" class="block" value="EXAME TAKEN BY USER" onClick="document.location.href='rot.php?no=<?php echo $val["id"];?>&&ne=<?php echo $val["uname"];?>&&b=1'" style="background-color:BLUE;"></th>	</tr>
<?php 
}?>
<?php } ?>

</table><?php }?></td>
</tr></table>

<form method=post action=admi.php><table width=100%><tr>
	<th colspan=2 align=center><input type=submit name=s1 class="block"  style="width: 50%" value="BACK"></th>
		</tr>	</table>
 
</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>