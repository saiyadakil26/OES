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
  <p class="pa"><a href="adus.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

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
 <div id="mymain">
<form method=post action=addur.php>
<table width=100% height=80%>
	<tr>
	<td align=center valign=middle>
	
	<table border=2 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown>
<?php
echo "<caption><font color=green>PLEASE PROVIDE YOUR INFORMATION </font></caption>";
?>
 <?php
	if (isset($_GET["err"]))
	{
		if ($_GET["err"]==2)
			echo "<caption><font color=#a00>PASSWORD AND CONFORM PASSWORD DOSN'T MATCH</font></caption>";
	if ($_GET["err"]==1)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT INFORMATION</font></caption>";}if (isset($_GET["msg"])){
if ($_GET["msg"]==0)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT MOBILE NUMBER</font></caption>";
if ($_GET["msg"]==14)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT E-MAIL ADDRESS</font></caption>";}

		
?>

		<tr>
			<td bgcolor="gold"><b>FIRST NAME :- </b></td>
			<td bgcolor="gold"><b>MIDDLE NAME :- </b></td>
			<td bgcolor="gold"><b>SURNAME :- </b></td>
			<td bgcolor="gold"><b>USER TYPE :- </b></td>
		</tr>
		<tr>
			<td bgcolor="darkslategray"><input type=text name=txtfname size=30 placeholder="ENTER YOUR FIRST NAME HERE"></td>
			<td bgcolor="darkslategray"><input type=text name=txtmname size=30 placeholder="ENTER YOUR MIDDLE NAME HERE"></td>
			<td bgcolor="darkslategray"><input type=text name=txtsname size=30 placeholder="ENTER YOUR SURNAME HERE"></td>
<td bgcolor="darkslategray">
				<SELECT name=cmbtype>
					<?php
					$host="localhost";
					$user="root";
					$password="";
					$con=mysqli_connect($host,$user,$password); 
					//$conn=mysqli_connect("localhost","root","");
					$db=mysqli_select_db($con,"akil"); 
					$qry="select * from userlist order by usertype";
						$rs=mysqli_query($con,$qry);
						while ($val=mysqli_fetch_assoc($rs))
						{
							echo "<OPTION value='".$val["usertype"]."'>".$val["usertype"]."</option>";
						}
					?>
	<OPTION value='admin'>ADMIN</option>
				</SELECT>
			</td>
		</tr>
		<tr>
			<td bgcolor="gold"><b>REG.NO/EMP.ID :- </b></td>
			<td bgcolor="gold"><b>COLLAGE NAME :- </b></td>
			<td bgcolor="gold"><b>E-MAIL :- </b></td>
			<td bgcolor="gold"><b>ENTER DOB :- </b></td>
		</tr>
		<tr>

			<td bgcolor="darkslategray"><input type=text name=txtreg size=30 placeholder="ENTER YOUR REG.No HERE"></td>
			<td bgcolor="darkslategray"><input type=text name=txtcoll size=30 placeholder="ENTER COLLAGE NAME HERE"></td>
			<td bgcolor="darkslategray"><input type=text name=txtemail size=30 placeholder="ENTER YOUR E-mail HERE"></td>
			<td bgcolor="darkslategray"><input type=date name=txtdob size=30 placeholder="DD-MM-YYYY"></td>

		</tr>
		<tr >
<td bgcolor="gold"><b>USER NAME :- </b></td>
<td bgcolor="gold"><b>PASSWORD :- </b></td>
<td bgcolor="gold"><b>CONFORM PASSWORD :- </b></td>
<td bgcolor="gold"><b>MOBILE NUMBER :- </b></td>
		</tr>
		<tr>

			<td bgcolor="darkslategray"><input type=text name=txtuname size=30 placeholder="ENTER USER NAME"></td>
			<td bgcolor="darkslategray"><input type="password" name=txtpass id="myInputa" placeholder="ENTER PASSWORD"><input type="checkbox" onclick="myFunction()"><font color=white>Show</font>

<script>
function myFunction() {
  var x = document.getElementById("myInputa");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</td>
<td bgcolor="darkslategray"><input type="password" name=txtcpass id="myInputb" placeholder="ENTER PASSWORD"><input type="checkbox" onclick="myFunctiona()"><font color=white>Show</font>

<script>
function myFunctiona() {
  var x = document.getElementById("myInputb");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</td>
<td bgcolor="darkslategray"><input type=text name=txtmob size=30 placeholder="ENTER MOBILE No."></td>

		</tr>
		<tr>
			<td></td>
			<th colspan=2><input type=submit name=s1 class="block" value="submit"></th>
			<td></td>
		</tr>
	</table>
	</td>
	</tr>
</table>
</form>
</div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>