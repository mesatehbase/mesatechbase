<html>
<head>
<title>formの練習K</title>
<meta charset="UTF-8">
</head>
<body>
<form action="mission_1-7.php"method="post">
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
	elseif($comment==$moji);
	echo"おめでとう";
	if(!empty($comment)){
	$filename='mission_1-7.txt';
	$fp=fopen($filename, 'a+');//aは付け加えて保存
	fwrite($fp,$comment."\n");//."\n"は改行しろということ
	fclose($fp);
	}
?>
<?php
   $file_name = "mission_1-7.txt";
  $ret_array = file( $file_name );// ファイルを全て配列に入れる
  for( $i = 0; $i < count($ret_array); ++$i ) {// 取得したファイルデータ(配列)を全て表示する 
    echo( $ret_array[$i] . "<br />\n" );// 配列を順番に表示する
  }
?>