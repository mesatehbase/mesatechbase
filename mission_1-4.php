<?php
$comment=$_POST['comment'];//?R?????g??e?` 
print ("入力ありがとうございます。<br/>");
$time = date("西暦Y年n月j日Ah:i");
  print($time);
print("に");
print($comment);
print"を受け取りました。"
?>
<html>
<head>
<title>formの練習K</title>
<meta charset="utf-8">
</head>
<body>
<form action="mission_1-5_3.php"method="post">
<input type="text"name="comment"value="コメント">
<input type="submit"name="send"value="送信">
</form>
</body>
</html>
