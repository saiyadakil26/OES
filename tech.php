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

<style>
      .example {
        position: relative;
        padding: 0;
        width: 200px;
        display: block;
        cursor: pointer;
        overflow: hidden;
      }
      .content {
        opacity: 0;
        font-size: 25px;
        position: absolute;
        top: 0;
        left: 0;
        color:gold;
   
	        width: 200px;
        height: 300px;
        -webkit-transition: all 400ms ease-out;
        -moz-transition: all 400ms ease-out;
        -o-transition: all 400ms ease-out;
        -ms-transition: all 400ms ease-out;
        transition: all 400ms ease-out;
        text-align: center;
      }
      .example .content:hover {
        opacity: 1;
      }
      .example .content .text {
        height: 0;
        opacity: 1;
        transition-delay: 0s;
        transition-duration: 0.5s;
      }
      .example .content:hover .text {
        opacity: 1;
        transform: translateY(200px);
        -webkit-transform: translateY(150px);
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
  <p class="pa"><a href="tech.php"><img src="refesh.png"alt="LOGO OF AAU" width=15 height=15>  REFRESH</a></p>

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
<p  style="color:yellow;"><b>YOUR CURRENT LOCATION || </b><a href="lgout.php">HOME</a><a href="tech.php"> >> DASHBORD </a></p></td></tr></table>
<form method=post action=adduser.php>

<table width=100% height=73%>
	<tr>
	<td>
	<table border=5 bgcolor=lightgray cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=auto hight=auto><?php
	if (isset($_GET["msg"]))
	{
		if ($_GET["msg"]==10)
	$jk=$_SESSION['etl'];
			echo "<caption><font color=BLACK><b>PAPER IS SET SUCCESFULLY YOUR EXAME ID IS = $jk</b></font></caption>"; } ?>

<?php
echo "<caption><b><font color=blue><h3>WELCOME TO ONLINE EXAMINATION SYSTEM </h3></font></b></caption>";
?>

		<tr>
		<td bgcolor="darkslategray">
		<div class="example">
      			<img src="profile.png" alt="profile" width=200 height=200></a>
      			<div class="content">
        		<div class="text"><a href="prof.php" style="color:gold;">PROFILE</a></div>
      			</div>
    		</div>
		</td>
		<td bgcolor="dimgray"><div class="example">
      			<img src="curentexam.png" alt="profile" width=200 height=200>
      			<div class="content">
        		<div class="text"><a href="cexam.php" style="color:gold;">CREATE EXAM</a></div>
      			</div>
    		</div>
		</td>
				<td bgcolor="darkslategray">
		<div class="example">
      			<img src="lastexam.png" alt="lastexam" width=200 height=200>
      			<div class="content">
        		<div class="text"><a href="cretresult.php" style="color:gold;">EXAM'S RESULT</a></div>
      			</div>
    		</div>
		</td>
		<td bgcolor="dimgray"><div class="example">
      			<img src="report.png" alt="report" width=200 height=200>
      			<div class="content">
        		<div class="text"><a href="treport.php" style="color:gold;">EXAM'S REPORT</a></div>
      			</div>
    		</div>
		</td></tr></table>
</td></tr></table>
</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
<?php } else{header("Location: myhome.php"); die();}?>