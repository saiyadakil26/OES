<?php session_start(); if(isset($_SESSION["location"]) && $_SESSION["location"]=="student"){ ?>
<html>
<head>
<title>OES</title>
        <link rel="shortcut icon" href="logo.png" type=" image/png">
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
  <p class="pa"><a href="endoexame.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

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
<p  style="color:yellow;"><b>YOUR CURRENT LOCATION || </b><a href="lgout.php">HOME</a><a href="stud.php"> >> DASHBORD </a><a href="endoexame.php">>>CURRENT EXAME</a></p></td></tr></table>
<form method=post action=stud.php>

<table width=100% height=73%>
	<tr>
	<td>
	<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=50% hight=auto>
<?php
echo "<caption><b><font color=blue><h3>YOUR EXAME IS OVER NOW RESULT PROVIDE BY TEACHER </h3></font></b></caption>";
?>	<td bgcolor="gold"><b>USER ID:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $_SESSION['id'] ;?></font></td>
		</tr><tr>
		<td bgcolor="gold"><b>USER NAME:- </b></td>
	<td bgcolor="darkslategray" align=center><font color=white><?php echo $_SESSION['uname'] ;?></font></td>
		</tr><tr>
	<td bgcolor="gold"><b>EXAME ID:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $_SESSION['eid'];?></font></td>
		</tr><tr>
		<td bgcolor="gold"><b>EXAME NAME:- </b></td>
	<td bgcolor="darkslategray" align=center><font color=white><?php echo $_SESSION['en'] ;?></font></td>
	<?php
	$i=$_SESSION['id'];
	unset($_SESSION["m"]); 
	$n=$_SESSION['uname'];
	$e=$_SESSION['eid'];
	$en=$_SESSION['en'];
	$k="RESULT IN PENDING";
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
 $qt="INSERT INTO $i$n(`sid`, `sname`, `eid`, `ename`,`mark`) values('$i','$n','$e','$en','$k')";
	mysqli_query($con,$qt);?>
<?php //echo"$qt";?>
		</tr>
		<tr>
			<th colspan=2><input type=submit name=s1 class="block" value="BACK"></th>
		</tr>
</table>
		
</td></tr></table> 
</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>