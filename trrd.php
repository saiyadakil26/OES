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
  height:500;
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
  <p class="pa"><a href="trrd.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

<p class="pa"><img src="avatar.jpg"alt="LOGO OF AAU" width=15 height=15>
<?php
 session_start();
$temp = $_SESSION['uname'];
echo"$temp"; ?></p>

<p class="pa"><img src="logout.png"alt="LOGO OF AAU" width=15 height=15>  LOG OUT</p>
	</div></td></tr>
  </table>
	</div>
 <div id="mymain">
<form name="myform" method=post action=adrs.php>
	<?php
	if (isset($_GET["b"]))
	{
	$_SESSION['fq']=$_GET['b'];
	$_SESSION['mark']=0;
	}
	if (isset($_GET["to"]))
	{
	$_SESSION['fq']=$_GET['to'];}
?>
<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	 $t=$_SESSION['eid'];
	$qur="select * from exame where id='$t'";
	$r=mysqli_query($con,$qur);
	$recc=mysqli_fetch_assoc($r);
	$en=$recc["ename"];?><?php
	$q="select * from $t$en order by id";
	//echo"$qur";echo"$q";
	$result=mysqli_query($con,$q);
	 $rowcount=mysqli_num_rows($result);
	$_SESSION['rowcount']=$rowcount;	
	if($result)
	{
	while($row = mysqli_fetch_assoc($result))
	{?>
	 <td align=center <?php
	$e=$_SESSION['eid'];
	$u=$_GET['no'];
	$ue=$_GET['ne'];
	$_SESSION['no']=$u;
	$_SESSION['ne']=$ue;
	$b="$e$u$ue";
	$as=$row["id"];
	 $qry="select * from $b where id='$as' ORDER BY answer";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	if (isset($_GET["err"])){}else{
	echo 'bgcolor="gold"'; }
  	}?>  
	<?php }}?>
<table width=100% height=100%>
	<tr>
	<td>
	<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=auto hight=auto>
<?php
echo "<caption><b><font color=blue><h3>AT THE END PLEASE SAVE FIRST THEN END PAPER</h3></font></b></caption>";
?>

		<tr>
	<td bgcolor="gold"><b>QUESTION :- </b></td>
	<td bgcolor="darkslategray" colspan="2"><input type=text name=txte size=50 style="height:48" value="<?php
	$u=$_GET['no'];
	$ue=$_GET['ne'];
	$e=$_SESSION['eid'];
	$en=$_SESSION['en'];
	$x=$_SESSION["fq"];
	$_SESSION["en"]=$en;
	 $q="select * from $e$en where id='$x'";
	//echo"$qur";echo"$q";
	$result=mysqli_query($con,$q);	
	if($result)
	{
	$row = mysqli_fetch_assoc($result);
	?><?php echo $row["que"] ;?><?php
		} ?>" readonly>
		</td>
		</tr><tr>
		<td bgcolor="gold"><b>ANSWER :- </b></td><td colspan=2>
		<?php
	$x=$_SESSION["fq"];
	$_SESSION["en"]=$en;
	 $q="select * from $e$u$ue where id=$x";
	//echo"$qur";echo"$q";
	$result=mysqli_query($con,$q);	
	if($result)
	{
	$row = mysqli_fetch_assoc($result);
	?><?php echo $row["answer"] ;?><?php
		} ?> </td></tr>
<tr>
	<td bgcolor="gold"><b>GETING MARK :- </b></td>
<td><input type="text" name=txts runat="server"></td>
</tr>	<tr>
<td colspan=2><table width=100%><tr>
<td >
<td ><input type=submit name=s1 class="block" value="<?php
if($rowcount==$x)
{echo"SAVE"; }else{ echo"NEXT";}?>"></td>
</tr></table></td>
</tr>

<?php
if($rowcount==$x)
{?><tr>

	<th colspan=3><input type="button" value="END THE TEST" class="block" onClick="document.location.href='endexame.php'" style="background-color:RED;"/></th>
		</tr><?php }?>

</form>

</table>
		
</td></tr></table> 
</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>