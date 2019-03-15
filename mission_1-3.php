<?php
$fp=fopen("mission_1-2.txt","r");
while($line=fgets($fp)){
echo"$line<br>";
}
fclose($fp);
?>
