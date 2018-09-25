<?php
$fp=fopen("counter.txt","r");
$count=fread($fp,10);
fclose($fp);
$count++;
echo"<center><h2>Page Views : " .$count. "</h2></center>";
$fp=fopen("counter.txt","w");
fwrite($fp,$count);
fclose($fp);

?>