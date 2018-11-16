<?php
$a=array(
	array(1,2,9),
	array(3,4,9),
	array(5,6,7));
$b=array(
	array(4,5,2),
	array(5,8,4),
	array(8,4,2));
$c=array();
for($row=0;$row<3;$row++){
for($col=0;$col<3;$col++){
$c[$row][$col]=$a[$row][$col]+$b[$row][$col];
echo "<center><p>".$c[$row][$col]."</p></center>";
}}
?>

