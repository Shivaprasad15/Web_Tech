<?php
$trans=array(
	array(1,2,9),
	array(3,4,9),
	array(5,6,7));
echo "<h2> matrix</h2>";
for($row=0;$row<3;$row++){
	echo "<br>";
	for($col=0;$col<3;$col++)
	{
	echo "  ".$trans[$row][$col]."  ";
}
}


echo "<h2> transpose of matrix </h2>";
for($row=0;$row<3;$row++){
	echo "<center><p><b>row number $row</b></p></center>";
	for($col=0;$col<3;$col++)
	{
	echo "<center><p>".$trans[$col][$row]."</p></center>";
}
}
?>
