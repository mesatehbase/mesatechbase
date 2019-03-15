<html>
<head>
<title>form2-1</title>
<meta charset=#UTF-8">
</head>
<body>
<form action="mission_2-1.php"method="post">
<input type="text"name="name"value="名前">
<br>
<input type="text"name="comment"value="コメント">
<input type="submit"name="send"value="送信">
</form>
</body>
<html>
<?php
$time = date("西暦Y年n月j日Ah:i");
$name=$_POST["name"];
$comment=$_POST["comment"];
$count=count(file("mission_2-1-2.txt"))+1
	if(empty($comment)){//empty(変数)で中身が空かを確認
	echo"入力されていません";
	}
	if(!empty($comment)){
	$filename='mission_2-1-2.txt';
	$fp=fopen($filename, 'a+');//aは付け加えて保存
	fwrite($fp,$count."<>".$name."<>".$comment."<>".$time."\n");//."\n"は改行しろということ
	fclose($fp);
	}
?>
</form>
</html>
