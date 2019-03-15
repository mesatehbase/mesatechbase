<html>
<head>
<title>form2-2-2</title>
<meta charset="UTF-8 ">
</head>
<body>
<form action="mission_2-2-2.php"method="post">
<input type="text"name="name"value="名前">
<br>
<input type="text"name="comment"value="コメント">
<input type="submit"name="send"value="送信">
</form>
</body>
</html>
<?php
$filename='mission_2-2-2.txt';
if(isset($_POST["name"],$_POST["comment"])){
$time = date("Y/m/d H:i:s");
$name=$_POST["name"];
$comment=$_POST["comment"];
$count=count(file("mission_2-2-2.txt"))+1;
$newdata=$count."<>".$name."<>".$comment."<>".$time."\n";//."\n"は改行しろということ
	$fp=fopen($filename, 'a+');//aは付け加えて保存
	fwrite($fp,$newdata);
	fclose($fp);
	}
?>
<?php
$filename = "mission_2-2-2.txt";
$lines = file($filename,FILE_IGNORE_NEW_LINES);//FILE_IGNORE_NEW_LINESを入れておかないと間が空く
foreach($lines as $line){
echo $line,'<br>';
}
$string=$count."<>".$name."<>".$comment."<>".$time."\n";
$ret=(explode("<>",$string));
echo $ret[0]."".$ret[1]."".$ret[2]."".$ret[3]."\n";
?>
