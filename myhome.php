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
* {
  box-sizing: border-box;
}

#mycon {
  background-color:black;
  color: black;
  width:100%;
  height:100%;
align:center;
}
#myHeader {
  background-color:limegreen;
  color: black;
  width:100%;
  height:20%;
text-align:center;
} 
#hb1 {
  background-color:bisque;
  color: black;
  width:15%;
  height:100%;
float: left;
} 
#hb2 {
  background-color:limegreen;
  color: black;
  width:60%;
  height:20%;
float: left;
text-align:center;
color:azure;
} 
#hb3 {
  background-color:bisque;
  color: black;
  width:15%;
  height:100%;
float:right;
} 
#mymain {
  background-color:lightgray;
  color: black;
  width:100%;
  height:75%;
float: left;
}
#myfooter {
  background-color:#f0ce54;
  color: black;
  width:100%;
  height:5%;
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

 </style>
</head>
<body>
<div id="mycon">
  <div id="myHeader">
	<div id="hb1"><img src="logo.png"alt="LOGO OF AAU" width=100% height=100%></div>
	<div id="hb2"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANAND AGRICULTURE UNIVERSITY,ANAND</h1>
<h2> &nbsp;ONLINE EXAMINATION SYSTEM.</h2></div>
	<div id="hb3"><img src="logo.png" alt="LOGO OF AAU" width=100% height=100%></div>
  </div>
 <div id="mymain">
<?php
	session_start();
	include_once "GDcap1.php";
?>
<form method=post action=check.php>
<table width=100% height=100%>
	<tr>
	<td align=center valign=middle>
	
	<table border=2 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown>
<?php
	if (isset($_GET["err"]))
	{
		if ($_GET["err"]==1)
			echo "<caption><font color=#a00>Invalid Username or Password</font></caption>";
		if ($_GET["err"]==2)
			echo "<caption><font color=#a00>Please Enter Username and Password</font></caption>";
		if ($_GET["err"]==3)
			echo "<caption><font color=#a00>Invalid Captcha Code</font></caption>";
	}
	if (isset($_GET["msg"]))
	{
		if ($_GET["msg"]==1)
			echo "<caption><font color=#a00>NOW TRY TO LOGIN</font></caption>";
	if ($_GET["msg"]==2)
			echo "<caption><font color=#a00>NOW TRY YOUR NEW PROFILE</font></caption>";
	if ($_GET["msg"]==10)
			echo "<caption><font color=#a00>YOU ARE SUCCESSFULY LOGOUT...</font></caption>";
}
?>		<tr>
			<td bgcolor="gold"><b>USER NAME :- </b></td>
		</tr>
		<tr>
			<td bgcolor="darkslategray"><input type=text name=txtuname size=30 placeholder="ENTER YOUR USER NAME HERE"></td>
		</tr>
		<tr>
			<td bgcolor="gold"><b>PASSWORD :- </b></td>
		</tr>
		<tr>

			<td bgcolor="darkslategray"><input type="password" name=txtupass id="myInput" placeholder="ENTER PASSWORD"size=30><input type="checkbox" onclick="myFunction()"><font color=white>Show</font>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
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
			<td align="center" bgcolor="gold"><img src="image.png"></td>
		</tr>
		<tr>

			<td bgcolor="darkslategray" align="center"><input type=text name=txtucode size=30 placeholder="ENTER ABOVE CAPTCHA HERE"></td>
		</tr>
		<tr>
			<th colspan=2><input type=submit name=s1 class="block" value="Login"></th>
		</tr>
<tr><td>
<p style="text-align:center"><b>IF YOU ARE NEW USER <a href=newuser.php>CLICK HERE</a></b></p></td></tr><tr><td align="center" bgcolor="gold"><a href=fpass.php><b><font size=1.5px>FORGET USER NAME OR PASSWORD</font></b></a></td></tr>
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