<html>
<head>
<title>form2-1</title>
<meta charset=#UTF-8">
</head>
<body>
<form action="mission_2-1.php"method="post">
<input type="text"name="name"value="���O">
<br>
<input type="text"name="comment"value="�R�����g">
<input type="submit"name="send"value="���M">
</form>
</body>
<html>
<?php
$time = date("����Y�Nn��j��Ah:i");
$name=$_POST["name"];
$comment=$_POST["comment"];
$count=count(file("mission_2-1-2.txt"))+1
	if(empty($comment)){//empty(�ϐ�)�Œ��g���󂩂��m�F
	echo"���͂���Ă��܂���";
	}
	if(!empty($comment)){
	$filename='mission_2-1-2.txt';
	$fp=fopen($filename, 'a+');//a�͕t�������ĕۑ�
	fwrite($fp,$count."<>".$name."<>".$comment."<>".$time."\n");//."\n"�͉��s����Ƃ�������
	fclose($fp);
	}
?>
</form>
</html>
