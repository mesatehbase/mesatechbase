<html>
<head>
<title>formの練習K</title>
<meta charset="UTF-8">
</head>
<body>
<form action="mission_1-4_2.php"method="post">
<input type="text"name="comment"value="コメント">
<input type="submit"name="send"value="送信">
</form>
</body>
</html>
<?php
$comment=$_POST["comment"];
$moji="完成！";//探す文字列
	if(empty($comment)){//empty(変数)で中身が空かを確認
	echo"入力されていません";
	}
	elseif($comment==$moji){
	echo"おめでとう";
	}
	if(!empty($comment)){
	$filename='mission_1-5_2.txt';
	$fp=fopen($filename, 'a+');
	fwrite($fp,$comment);
	fclose($fp);
	}
?>
