<?php session_start(); if(isset($_SESSION["location"])){ ?>
<html>
<head>
<title>OES</title>
        <link rel="shortcut icon" href="logo.png" type=" image/png">
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
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

.block:hover {
  background-color: #ddd;
  color: black;
}


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
  <p class="pa"><a href="prof.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

<p class="pa"><img src="avatar.jpg"alt="LOGO OF AAU" width=15 height=15>
<a href=prof.php><?php
 
$temp = $_SESSION['uname'];
echo"$temp";
unset($_SESSION["unam"]); ?></a></p>

<p class="pa"><a href="lgout.php"><img src="logout.png"alt="LOGO OF AAU" width=15 height=15>  LOG OUT</a></p>
	</div></td></tr>
  </table>
	</div>
 <div id="mymain"><table border=5 width=100%><tr><td bgcolor="skyblue">
<p  style="color:yellow;"><b>YOUR CURRENT LOCATION || </b><a href="lgout.php">HOME</a>
<?php if($_SESSION['utype']=="STUDENT"){echo'<a href="stud.php">';}if($_SESSION['utype']=="admin"){echo'<a href="admi.php">';}if($_SESSION['utype']=="TEACHER"){echo'<a href="tech.php">';}?> >> DASHBORD </a><a href="prof.php"> >> PROFILE</a></p></td></tr></table>
<form method=post action=pupdate.php enctype="multipart/form-data">

<table width=100% height=73%>
	<tr>
	<td>
	<table border=2 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown><?php if (isset($_GET["err"]))
	{
		if ($_GET["err"]==1)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT INFORMATION</font></caption>";
		if ($_GET["err"]==2)
			echo "<caption><font color=#a00>PASSWORD AND CONFORM PASSWORD NOT MATCH</font></caption>";
		
		if ($_GET["err"]==4)
			echo "<caption><font color=#a00>PLEASE PROWIDE REQURED INFORMATION </font></caption>";
	} if (isset($_GET["msg"]))
	{
		if ($_GET["msg"]==0)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT MOBILE NUMBER</font></caption>";
		if ($_GET["msg"]==14)
			echo "<caption><font color=#a00>PLEASE PROVIDE CORRECT E-MAIL</font></caption>";
	}?><?php
echo "<caption><b><font color=blue><h3>YOU CAN UPDATE YOUR PROFILE HERE </h3></font></b></caption>";
?>

		<tr>
			<td rowspan="3">

	<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$i=$_SESSION['id'];
	$qry="select * from photo where id='$i'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$rec=mysqli_fetch_array($rs);
	?>
	<img src="image/<?php echo $rec['img']; ?>" alt="<?php echo $rec['img']; ?>" width=200 height=200>
	<?Php
	}
	else{
	?>
	<img src="profile.png" alt="profile" width=200 height=200>
	<?php
	}
	?>
</td>
			<td bgcolor="gold"><b>OLD PASSWORD :- </b></td>
			<td bgcolor="gold"><b>NEW PASSWORD :- </b></td>
			<td bgcolor="gold"><b>CONFORM NEW PASSWORD :- </b></td>
		</tr>
		<tr>
		
			<td bgcolor="darkslategray"><input type="password" name=txtop id="myInputa" placeholder="ENTER PASSWORD"><input type="checkbox" onclick="myFunctiona()"><font color=white>Show</font>

<script>
function myFunctiona() {
  var x = document.getElementById("myInputa");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</td>
	<td bgcolor="darkslategray"><input type="password" name=txtnp id="myInputb" placeholder="ENTER PASSWORD"><input type="checkbox" onclick="myFunctionb()"><font color=white>Show</font>

<script>
function myFunctionb() {
  var x = document.getElementById("myInputb");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</td>
<td bgcolor="darkslategray"><input type="password" name=txtcnp id="myInputc" placeholder="ENTER PASSWORD"><input type="checkbox" onclick="myFunctionac()"><font color=white>Show</font>

<script>
function myFunctionac() {
  var x = document.getElementById("myInputc");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</td>
		</tr>
		<tr>
			
			<td bgcolor="gold"><b> MOBILE NUMBER :- </b></td>
			<td bgcolor="gold"><b>E-MAIL :- </b></td>
			<td bgcolor="gold"><b>UPDATE USER NAME :- </b></td>
		</tr>
		<tr>
<td bgcolor="darkslategray"><input type="file" name="uploadfile" value=""/></td>
			<td bgcolor="darkslategray"><input type=text name=txtmob size=30 placeholder="ENTER MOBILE NUMBER HERE"></td>
			<td bgcolor="darkslategray"><input type=text name=txtemail size=30 placeholder="ENTER YOUR E-mail HERE"></td>
		<td bgcolor="darkslategray"><input type=text name=txtuu size=30 placeholder="ENTER NEW USER NAME HERE"></td>	

		</tr><tr>
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