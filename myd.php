	<?php
session_start();
// echo $_SESSION['fq']; 
//echo $_SESSION['rowcount']; 
//echo $_SESSION['mark'];
$num1=rand(1,4);
$num2=rand(1,4);
$num3=rand(1,4);
$num4=rand(1,4);

/*echo"$num2,$num1,$num3,$num4";
function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
print_r( UniqueRandomNumbersWithinRange(1,10,10) );*/


/*$n=range(1,5);
shuffle($n);
echo $n[0];
echo "\n";
$nm=$n;
echo"$nm[0]";$y=0;
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
$_SESSION['s$y']=$n[$x];
$y++;
}
echo $_SESSION['s$y'];*/
?>
<script>
    submitFormOkay = false;
    $(document.body).on("click", "a", function() {
        submitFormOkay = true;
    });
    window.onbeforeunload = function(event) {
        event.preventDefault(); 
        if (!submitFormOkay) {
            window.setTimeout(function () { 
                window.location = "myhome.php";
            }, 0); 
            window.onbeforeunload = null;
        }
    }
window.location.replace(myhome.php)
</script>

<form method=post>
<?php
echo $_SESSION["ml"][0];
function gen_images($num = 1)
{
	$images = array();
	$i = 1;
	while($i < $num)
	{
		$rand = rand(1,5);
		
		while(in_array($rand, $images))
		{
			$rand = rand(1,5);
		}
		$images[$i] = $rand;
		$i ++;
	}
	return $images;
}

$images = gen_images(6);

print_r($images); // Array ( [0] => 11 [1] => 21 [2] => 25 [3] => 16 [4] => 3 )
//echo $images[0];
$v=1;
$_SESSION['rand']=$images;

for ($v=0; $v< 4; $v++)
{
//$v++;
}$x=4;
echo $_SESSION['rand'][$x];
//$images = $_POST["int[]"];
?>
<input type=submit ></form>
<html><meta http-equiv="refresh" content="0.8;url=myd.php" />
</html>