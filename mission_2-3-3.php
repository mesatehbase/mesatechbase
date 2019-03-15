<html>
<head>
<title>form2-3-3</title>
<meta charset="UTF-8 ">
</head>
<body>
<form action="mission_2-3-3.php"method="post">
<input type="text"name="name"value="名前">
<br>
<input type="text"name="comment"value="コメント">
<input type="submit"name="send"value="送信">
</form>
</body>
</html>
<?php
$filename='mission_2-3-3.txt';
if(isset($_POST["name"],$_POST["comment"])){
$time = date("Y/m/d H:i:s");
$name=$_POST["name"];
$comment=$_POST["comment"];
if(file_exists($filename)){
	$hairetu=file("mission_2-3-3.txt");
	$number=count($hairetu)+1;
}else{
	$number=1;
}
$newdata=$number."<>".$name."<>".$comment."<>".$time."\n";//."\n"は改行しろということ
	$fp=fopen($filename, 'a+');//aは付け加えて保存
	fwrite($fp,$newdata);
	fclose($fp);
	}
?>
<?php
$filename = "mission_2-3-3.txt";
$lines = file($filename);
$delete=$_POST["delete"];
	foreach($lines as $line){
		if(isset$delete){
		if($number==$delete){
		$fp=fopen($filename, 'w');//wは上書き保存
		fwrite($fp,$line![$delete]);
		fclose($fp);
		}else{
	$fp=fopen($filename, 'a');//wは上書き保存
		fwrite($fp,$newdata);
		fclose($fp);
		}
				}
$new_line=(explode("<>",$line));
	echo$new_line[0]." ".$new_line[1]." ".$new_line[2]." ".$new_line[3]."<br>\n";
}
?>
