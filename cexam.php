<?php session_start(); if(isset($_SESSION["location"]) && $_SESSION["location"]=="teacher"){ ?>
<html>
<head>
<title>OES</title>
        <link rel="shortcut icon" href="logo.png" type=" image/png">

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
  <p class="pa"><a href="cexam.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

<p class="pa"><img src="avatar.jpg"alt="LOGO OF AAU" width=15 height=15>
<a href=prof.php><?php
// session_start();
$temp = $_SESSION['uname'];
echo"$temp"; ?></p></a>

<p class="pa"><a href="lgout.php"><img src="logout.png"alt="LOGO OF AAU" width=15 height=15>  LOG OUT</a></p>
	</div></td></tr>
  </table>
	</div>
 <div id="mymain"><table border=5 width=100%><tr><td bgcolor="skyblue">
<p  style="color:yellow;"><b>YOUR CURRENT LOCATION || </b><a href="lgout.php">HOME</a><a href="tech.php"> >> DASHBORD </a><a href="cexam.php">>>CREATE EXAME</a></p></td></tr></table>
<form method=post action=crexame.php>

<table width=100% height=73%>
	<tr>
	<td>
	<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=auto hight=auto>
<?php
	if (isset($_GET["err"]))
	{
		if ($_GET["err"]==1)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT INFORMATION </font></caption>";}
?>
<?php
echo "<caption><b><font color=blue><h3>PROVIDE THE INFORMATION ABOUT EXAM </h3></font></b></caption>";
?>

		<tr>
			<td bgcolor="gold"><b>EXAM NAME:- </b></td>
			<td bgcolor="gold"><b>SECRET KEY :- </b></td>
			<td bgcolor="gold"><b>EXAME DURATION :- </b></td>
			<td bgcolor="gold"><b>EXAME TYPE :- </b></td>
		</tr>
		<tr>
		<td bgcolor="darkslategray"><input type=text name=txtename size=30 placeholder="ENTER EXAME NAME"></td>
			<td bgcolor="darkslategray"><input type=text name=txtskey size=30 placeholder="ENTER SECRET KEY"></td>
			<td bgcolor="darkslategray"><input type=text name=txted size=30 placeholder="PROVIDE TIME IN MINUTES"></td>
<td bgcolor="darkslategray"><SELECT name=cmbtype><option>MCQ</option><option>DESCRIPTIVE QUESTION</option></select></td></tr>
	<tr>
			<td></td>
			<th colspan=2><input type=submit name=s1 class="block" value="submit"></th>
			<td></td>
		</tr>
</table>
		
</td></tr></table>
</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>