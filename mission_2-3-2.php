<html>
<head>
<title>form2-3-2</title>
<meta charset="UTF-8 ">
</head>
<body>
<form action="mission_2-3-2.php"method="post">
<input type="text"name="name"value="名前">
<br>
<input type="text"name="comment"value="コメント">
<input type="submit"name="send"value="送信">
<br>
<input type="text"name="delete"value="削除対象番号">
<input type="submit"name="send"value="削除">
</form>
</body>
</html>
<?php
$filename='mission_2-3-2.txt';
if(isset($_POST["name"],$_POST["comment"])){
$time = date("Y/m/d H:i:s");
$name=$_POST["name"];
$comment=$_POST["comment"];
if(file_exists($filename)){
	$hairetu=file("mission_2-3-2.txt");
	$number=count($hairetu)+1;
}else{
	$number=1;
}
$newdata=$number."<>".$name."<>".$comment."<>".$time."\n";//."\n"は改行しろということ
	$fp=fopen($filename, 'a+');//aは付け加えて保存
	fwrite($fp,$newdata);
	fclose($fp);
	}
if(isset($_POST["delete"])){
	$delete=$_POST["delete"];
		if($number==$delete){
		unlink($filename);
		}else{
		$fp=fopen($filename, 'a+');//aは付け加えて保存
		fwrite($fp,$newdata);
		fclose($fp);
		}
}
?>
<?php
$filename = "mission_2-3-2.txt";
$lines = file($filename);
foreach($lines as $line){
$new_line=(explode("<>",$line));
	echo$new_line[0]." ".$new_line[1]." ".$new_line[2]." ".$new_line[3]."<br>\n";
}
?>
