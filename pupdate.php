<?php
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password); 
	$db=mysqli_select_db($con,"aau");
	$a=$_POST["txtop"];
	$b=$_POST["txtnp"];
	$c=$_POST["txtcnp"];
	$d=$_POST["txtmob"];
	$email=$_POST["txtemail"];
	$f=$_POST["txtuu"];
	session_start();
	$temp = $_SESSION['pass'];
	$x = $_SESSION['id'];
	  
 	 $max=9999999999;
	$min=1000000000;
	if($d>=$min && $d<=$max)
	{}else{header("Location: prof.php?msg=0");
		die();}
	$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email) 
		{header("Location: prof.php?msg=14");
		die();
   		 }

        if ($d=="" || $email=="" || $f=="")
	{
		header("Location: prof.php?err=4");
		die();
	}
	if ($b!=$c)
	{
		header("Location: prof.php?err=2");
		die();
	}
	if($a!=$temp)
	{
		header("Location: prof.php?err=3");
		die();
	}
	$q="select * from user where id=$x ";
	$result=mysqli_query($con,$q);
	$rw = mysqli_fetch_assoc($result);
	$ol=$rw['uname'] ; 
       	
	$qry="UPDATE user SET pass='$b',mono='$d',email='$email',uname='$f' WHERE id='$x'"; 
	if (mysqli_query($con,$qry))
	{
	  $msg = ""; 
  
  // If upload button is clicked ... 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "image/".$filename;
	echo"$filename";echo"1"; 
        if( $filename!=""){ 
	echo"2"; 
         // Get all the submitted data from the form 
	$qry="select * from photo where id='$x'";
	$rs=mysqli_query($con,$qry);
	if (mysqli_num_rows($rs)==1)
	{
	$sql = "UPDATE photo SET id='$x',uname='$f',img='$filename' WHERE id='$x'"; 
  	}
	else
	{
	$sql = "INSERT INTO photo (id,uname,img) VALUES ('$x','$f','$filename')"; 
	}
        // Execute query 
        mysqli_query($con, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully";
	 
        }else{ 
            $msg = "Failed to upload image"; 
      } }
	$qt="RENAME TABLE $x$ol TO $x$f";
	$result=mysqli_query($con,$qt);
	$qryk="SELECT * FROM `exame` WHERE etype='MCQ' OR etype='DESCRIPTIVE QUESTION'";
	$resultk=mysqli_query($con,$qryk);
	while($rwo = mysqli_fetch_assoc($resultk))
	{$ib=$rwo['id'];
	$qtm="RENAME TABLE $ib$x$ol TO $ib$x$f";
	$result=mysqli_query($con,$qtm);
	//echo"1";
	$z="result";
	$un=$rwo['ename'];
	$qts = "UPDATE $x$f SET sname='$f' WHERE sid='$x'";
	$result=mysqli_query($con,$qts);
	$qts = "UPDATE $ib$un$z SET sname='$f' WHERE sid='$x'"; 
	$result=mysqli_query($con,$qts);
	}
	//echo"$qts";
	header("Location: myhome.php?msg=2");
		die();
	}
	else
	{
	header("Location: prof.php?err=1");
		die();
	
	}

	?>