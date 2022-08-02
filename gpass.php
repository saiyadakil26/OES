<html>
<head>
<title>OES</title>
        <link rel="shortcut icon" href="logo.png" type=" image/png">
<? php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php
	$fnm=$_POST["txte"];
	$em=$_POST["txts"];
	$db=$_POST["txtq"];
	if($fnm=="" && $em=="" && $db==""){header("Location: fpass.php?err=1");
	die();
	} 
?>
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
  height:80%;
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
	<div id="hb3" align=center><img src="logo.png"alt="LOGO OF AAU" width=68 height=68>
		</div></div>
 <div id="mymain">
<form method=post action=myhome.php>
<?php	
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$fnm=$_POST["txte"];
	$em=$_POST["txts"];
	$db=$_POST["txtq"];
    $q="SELECT * FROM `user` WHERE fname='$fnm' and email='$em' AND dob='$db'";
	$result=mysqli_query($con,$q);
	if (mysqli_num_rows($result)!=1)
	{
	header("Location:fpass.php?err=1");
		die();
	}
//echo"$q";
	?>
<div align=top>
<table width=100% height=50%>
	<tr> <td><?php
echo "<caption><b><font color=blue><h3>PLEASE REMEMBER USER NAME AND PASSWORD </h3></font></b></caption>";
?></td>
<?php	while($rw = mysqli_fetch_assoc($result))
{
?>
	<td>
	<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=50% hight=auto>
	<tr><td bgcolor="gold"><b>USER NAME:- </b></td>
	<td bgcolor="darkslategray" colspan="3" align=center><font color=white><?php echo $rw['uname'] ;?></font></td>
		</tr><tr>
		<td bgcolor="gold"><b>YOUR PASSWORD:- </b></td>
	<td bgcolor="darkslategray" align=center><font color=white><?php echo $rw['pass'] ;?></font></td>
		</tr><?php } ?><tr align center>
			<th colspan=2 align center><input type=submit name=s1 class="block" value=" GO TO LOGIN"></th>
		</tr> </table></td></tr></table>
</form></div></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
