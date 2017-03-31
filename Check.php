<?php
 $fact;
 $num =$_GET["txtvar"];
$number=$num; 
$sum = 0;
 while ($number != 0)
 {
 $fact = 1;
 for ($i = 1; $i <= $number % 10; $i++)
$fact *= $i;
 $sum += $fact;
 $number = (int)($number / 10);
 }
 if ($sum == $num)
 {
 echo "<br>";
 $display_result = $num. " is a strong number.";
 echo $display_result;
 echo "<br>";
 }
 else {
echo "<br>";
$display_result = $num. " is a not strong number.";
echo $display_result;
echo "<br>";
 }
?>