<?php session_start(); if(isset($_SESSION["location"]) && $_SESSION["location"]=="student" && isset($_SESSION["m"]) ){ ?>

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
  <p class="pa"><a href="mstexame.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

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
	<?php
	if (isset($_GET["no"]))
	{
	$_SESSION['fq']=$_GET['no']; 
}?>
<table border=5 width=100%><tr><td bgcolor="skyblue" width=200>
<p style="color:yellow;">YOUR QUESTIONS||</p></td>
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
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$b="$e$i$n";
	//$as
	$y=$row["id"];
	//$y=$_SESSION["fq"];
	$as=$_SESSION['rand'][$y];
	 $qry="select * from $b where id='$as' ORDER BY answer";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	if (isset($_GET["err"])){}else{
	echo 'bgcolor="gold"'; }
  	}?>  ><a href=mstexame.php?no=<?php echo $row["id"];?>><b><?php echo $row["id"];?><b></a></td>
	<?php }}?></p></tr></table>
	
	<b><div id="response" style="background-color:red;color: white;text-size:25;
"></div></b>
<script type="text/javascript">
setInterval(function(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","res.php",false);
xmlhttp.send(null);
document.getElementById("response").innerHTML=xmlhttp.responseText;
if(xmlhttp.responseText=="YOUR EXAME FINISH IN = 00:00:00"){
window.location='http://localhost/akil%20project/endoexame.php';}
},1000);
</script>

	
<form name="myform" method=post action=msub.php>
<table width=100% height=73%>
	<tr>
	<td>
	<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=auto hight=auto>
<?php
echo "<caption><b><font color=blue><h3>BEST OF LUCK</h3></font></b></caption>";
?>

		<tr>
	<td bgcolor="gold"><b>QUESTION :- </b></td>
	<td bgcolor="darkslategray" colspan="2"><input type=text name=txte size=50 style="height:48" value="<?php
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	//echo $_SESSION['rand'][3];
	$_SESSION["en"]=$en;
	 $q="select * from $t$en where id=$x";
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
	<table width=100%><tr>
	<?php
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	$_SESSION["en"]=$en;
	 $q="select * from $t$en where id=$x";
	//echo"$qur";echo"$q";
	$result=mysqli_query($con,$q);	
	if($result)
	{
	$row = mysqli_fetch_assoc($result);
	?>
	<td bgcolor="darkslategray"><input type=radio name=txts value="<?php echo $row["oa"] ;?>" 
<?php
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	
	$e=$_SESSION['eid'];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$b="$e$i$n";
	 $qry="select * from $b where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$rec=mysqli_fetch_assoc($rs);
	if($rec["answer"]==$row["oa"] ){
	echo ' checked="checked"'; }
  	}?> ><font color=white><?php echo $row["oa"] ;?></font></td>
	<?php //echo $rec["answer"]; echo $row["oa"] ;?>
	</tr><tr><td bgcolor="darkslategray"><input type=radio name=txts value="<?php echo $row["ob"] ;?>" <?php
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	$e=$_SESSION['eid'];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$b="$e$i$n";
	 $qry="select * from $b where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$rec=mysqli_fetch_assoc($rs);
	if($rec["answer"]==$row["ob"] ){
	echo ' checked="checked"'; }
  	}?>><font color=white><?php echo $row["ob"] ;?></font></td>
</tr><tr>
	<td bgcolor="darkslategray"><input type=radio name=txts value="<?php echo $row["oc"] ;?>" <?php
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	$e=$_SESSION['eid'];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$b="$e$i$n";
	 $qry="select * from $b where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$rec=mysqli_fetch_assoc($rs);
	if($rec["answer"]==$row["oc"] ){
	echo ' checked="checked"'; }
  	}?>><font color=white><?php echo $row["oc"] ;?></font></td>
</tr><tr>	<td bgcolor="darkslategray"><input type=radio name=txts value="<?php echo $row["od"] ;?>" <?php
	$y=$_SESSION["fq"];
	$x=$_SESSION['rand'][$y];
	$e=$_SESSION['eid'];
	$i=$_SESSION['id'];
	$n=$_SESSION['uname'];
	$b="$e$i$n";
	 $qry="select * from $b where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$rec=mysqli_fetch_assoc($rs);
	if($rec["answer"]==$row["od"] ){
	echo ' checked="checked"'; }
  	}?>><font color=white><?php echo $row["od"] ;?></font></td>
	</td><?php
		}
	 ?>

	</tr><tr><td><input type="button" value="DESELECT" onClick="document.location.href='deselect.php'" style="background-color:silver;" /></td></tr></table>	</td>
		</tr>
	
<tr>
<td colspan=2>
<table width=100%>
<tr><?php if($_SESSION['fq']!=1){ ?>
<th>
<input type="button" value="PREVIES" class="block" onClick="document.location.href='mprevies.php'" style="background-color:skyblue;" />
</th><?php } ?>
<script type="text/javascript">
	function conf()
	{
		val=confirm("Are You Sure?");
		return val;
	}
	
</script>
<td ><button type=submit name=s1 class="block" onclick=<?php if($rowcount==$_SESSION['fq']){echo "'return conf()'";}?> value="<?php if($rowcount==$_SESSION['fq']){echo"END THE TEST";}else{echo "NEXT"; } ?>"style=<?php if($rowcount==$_SESSION['fq']){echo"background-color:RED;"; } ?>"><?php if($rowcount==$_SESSION['fq']){echo"END THE TEST";}else{echo "NEXT"; } ?></button>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table> 
</form>
</div>

 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>