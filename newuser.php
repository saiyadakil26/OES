<html>
<head>
<title>OES</title>
        <link rel="shortcut icon" href="logo.png" type=" image/png">

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

 </style>
</head>
<body>
<div id="mycon">
  <div id="myHeader">
	<div id="hb1"><img src="logo.png"alt="LOGO OF AAU" width=100% height=100%></div>
	<div id="hb2"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANAND AGRICULTURE UNIVERSITY,ANAND</h1>
<h2> &nbsp;ONLINE EXAMINATION SYSTEM.</h2></div>
	<div id="hb3"><img src="logo.png" alt="LOGO OF AIT" width=100% height=100%>
</div>
  </div>
 <div id="mymain">
<form method=post action=adduser.php>
<table width=100% height=68%>
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
				</SELECT>
			</td>
		</tr>
		<tr>
			<td bgcolor="gold"><b>REG.NO/EMPLOY.ID :- </b></td>
			<td bgcolor="gold"><b>COLLAGE NAME :- </b></td>
			<td bgcolor="gold"><b>E-MAIL :- </b></td>
			<td bgcolor="gold"><b>ENTER DOB :- </b></td>
		</tr>
		<tr>

			<td bgcolor="darkslategray"><input type=text name=txtreg size=30 placeholder="ENTER YOUR REG.No/EMP.id HERE"></td>
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