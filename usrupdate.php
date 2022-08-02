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
if (isset($_GET["no"]))
	{$i=$_GET["no"];}
	
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
  <p class="pa"><a href="usrupdate.php?no=<?php echo $i;?>"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

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
<p  style="color:yellow;"><b>YOUR CURRENT LOCATION || </b><a href="lgout.php">HOME</a><a href="admi.php"> >> DASHBORD </a><a href="usrupdate.php?no=<?php echo $i;?>">>>EXAME'S REPORT</a></p></td></tr></table><br>
<form method=post action=updateu.php?no=<?php echo $i; ?>>
<?php
echo "<caption><b><font color=blue><h3>YOU CAN CHANGE ONLY THIS INFORMATION</h3></font></b></caption>";
?>

<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	session_start();
	$q="select * from user WHERE id='$i'";
	$result=mysqli_query($con,$q);
	while ($val=mysqli_fetch_assoc($result))
	{ ?>
		<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=50% hight=auto>
	<tr>
		<td bgcolor="gold"><b>USER NAME:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['uname'] ;?></font></td>
	<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=ename placeholder="NEW USER NAME"></font></td>
		</tr><tr>
		<td bgcolor="gold"><b>FIRST NAME:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['fname'] ;?></font></td>
	<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=fname placeholder="NEW FIRST NAME"></font></td>
	</tr>
	<tr>
		<td bgcolor="gold"><b>MIDDLE NAME:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['mname'] ;?></font></td>
	<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=mname placeholder="NEW MIDDEL NAME"></font></td>
	</tr><tr>
		<td bgcolor="gold"><b>SURNAME NAME:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['sname'] ;?></font></td>
	<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=sname placeholder="NEW SURNAME NAME"></font></td>
	</tr><tr>
		<td bgcolor="gold"><b>PASSWORD :- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['pass'] ;?></font></td>
<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=pass placeholder="NEW NEW PASSWORD"></font></td>
</tr><tr>
		<td bgcolor="gold"><b>E-MAIL:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['email'] ;?></font></td>
	<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=email placeholder="NEW E-MAIL ADDRESS"></font></td>
	</tr><tr>
		<td bgcolor="gold"><b>MOBILE NO:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $val['mono'] ;?></font></td>
	<td bgcolor="darkslategray" colspan="3" align=center><input type=text name=mono placeholder="NEW MOBILE NO."></font></td>
	</tr><tr>
<script type="text/javascript">
	function conf()
	{
		val=confirm("Are You Sure?");
		return val;
	}
	
</script>


<th colspan="5"><input type=submit name=s1 class="block" value="UPDATE USER" style="background-color:GREEN;" onclick='return conf()'></th>
</tr>	

</table><?php
	}
?>
</form>
 <form method=post action=usr.php><table width=100% ><tr>
	<th colspan=2 align=center><input type=submit name=s1 class="block"  style="width: 50%" value="BACK"></th>
		</tr>	</table>

</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>