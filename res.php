<?php
session_start();

$from_t1=date('Y-m-d H:i:s');
$to_t1=$_SESSION["end_time"];

$tf=strtotime($from_t1);
$ts=strtotime($to_t1);

$diff=$ts-$tf;

echo"YOUR EXAME FINISH IN = ";
echo gmdate("H:i:s",$diff);
//echo"$diff";
?>