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
<form method=post action=gpass.php>

<table width=100% height=73%>
	<tr>
	<td>
	<table border=5 bgcolor=orange cellpadding=10 cellspacing=3 align=center BORDERCOLOR=rosybrown width=auto hight=auto><?php if (isset($_GET["err"]))
	{
		if ($_GET["err"]==1)
			echo "<caption><font color=#a00>YOUR INFORMATION IS WRONG</font></caption>";
		if ($_GET["err"]==2)
			echo "<caption><font color=#a00>PLEASE PROVIDE INFORMATION</font></caption>";} ?>
<?php
echo "<caption><b><font color=blue><h3>PLEASE PROVIDE FOLOWING INFORMATION </h3></font></b></caption>";
?>

		<tr>
	<td bgcolor="gold"><b>ENTER FIRST NAME :- </b></td>
	<td bgcolor="darkslategray" colspan="3"><input type=text name=txte size=30 placeholder="PLESE ENTER FIRST NAME"></td>
		</tr><tr>
		<td bgcolor="gold"><b>ENTER E-MAIL:- </b></td>
	<td bgcolor="darkslategray"><input type=text name=txts size=30 placeholder="PLEASE ENTER E-MAIL ADDRESS"></td>
		</tr><tr>
	<td bgcolor="gold"><b>ENTER DATE OF BIRTH :- </b></td>
	<td bgcolor="darkslategray" colspan="3"><input type=date name=txtq size=30 placeholder="PLESE ENTER DOB"></td>
		</tr><tr>
			<th colspan=2><input type=submit name=s1 class="block" value="ENTER"></th>
		</tr>
</table>
		
</td></tr></table> 
</form></div>
 <div id="myfooter"><span>2021-2022</span> &copy; - Developed By <strong>COLLAGE OF AIT,AAU,ANAND</strong></div>
</div>
</body>
</html>
